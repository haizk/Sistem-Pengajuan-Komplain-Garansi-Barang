<?php

namespace App\Http\Controllers\admin;

use App\Models\Komplain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataPengajuanGaransiController extends Controller
{
    public function index(Request $request){
        $complains = Komplain::all();
        return view('pages.admin.dataPengajuanGaransi.index', compact('complains'));
    }

    public function update(Request $request, Komplain $complain)
    {
        $validatedData = $request->validate([
            'status' => 'required'
        ]);

        Komplain::where('id', $complain->id)
            ->update($validatedData);

        return back();
    }

    // public function show(Komplain $komplain)
    // {
    //     return view('pages.admin.dataRiwayatTindakan.index', [
    //         'complains' => $komplain
    //     ]);
    // }
}
