<?php

namespace App\Http\Controllers\admin;

use App\Models\Komplain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Histori;
use Illuminate\Support\Facades\Storage;


class DataPengajuanGaransiController extends Controller
{
    public function index()
    {
        return view('pages.admin.dataPengajuanGaransi.index', [
            'title' => 'Komplain',
            'complains' => Komplain::all()
        ]);
    }

    public function edit($id)
    {
        $complain = Komplain::find($id);

        if (!$complain) {
            return redirect()->route('data-pengajuan-garansi.index')->with('error', 'Komplain Tidak Tersedia!');
        }

        return view('pages.admin.dataPengajuanGaransi.edit', ['complain' => $complain, 'title'=>'Edit Data']);
    }

    public function update(Request $request, Komplain $complain)
    {
        $validatedData = $request->validate([
            'status' => 'required| string',
        ]);

        $complain->status = $validatedData['status'];
        $complain->save();

        return redirect()->route('data-pengajuan-garansi.index')->with('success', 'Data berhasil diubah!');
    }

    public function destroy($id_komplain){

        $complain = Komplain::find($id_komplain);

        if(!$complain){
            return redirect()->route('data-pengajuan-garansi.index')->with('error', 'Komplain Tidak Tersedia!');
        }

        $complain->delete();

        return redirect()->route('administrator.barang.index')->with('success', 'Data berhasil dihapus!');
    }
}
