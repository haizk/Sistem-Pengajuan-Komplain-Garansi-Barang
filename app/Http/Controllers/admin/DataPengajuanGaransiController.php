<?php

namespace App\Http\Controllers\admin;

use App\Models\Komplain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataPengajuanGaransiController extends Controller
{
    public function index()
    {
        return view('pages.admin.dataPengajuanGaransi.index', [
            'title' => 'Komplain',
            'complains' => Komplain::all()
        ]);
    }

    public function edit(Komplain $complain)
    {
        return view('pages.admin.dataPengajuanGaransi.edit', [
            'title' => 'Edit Data',
            'complain' => $complain,
        ]);
    }

    public function update(Request $request, Komplain $complain)
    {
        $validatedData = $request->validate([
            'tanggal_pembelian' => 'required| date',
            'batas_garansi' => 'required| date',
            'keluhan' => 'required| string',
            'status' => 'required| string',
            'id_barang' => 'required',
            'id_pembeli' => 'required',
            'foto' => 'nullable| image| file| mimes:jpeg,png,jpg,gif,svg| max:2048',
        ]);

        Komplain::where('id', $complain->id)
            ->update($validatedData);

        return redirect('/admin/data-pengajuan-garansi')->with('success', 'Data berhasil diubah!');
    }
}
