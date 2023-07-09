<?php

namespace App\Http\Controllers\admin;

use App\Models\Komplain;
use App\Models\Histori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataRiwayatTindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $komplainIDs = Komplain::pluck('id');
        // $komplain = Komplain::pluck('id');

        // Histori::where('id_komplain', $komplain->id)
        //     return view('pages.admin.dataRiwayatTindakan.index', [
        //         'historis' => Histori::all()
        //     ]);
        
        $historis = Histori::all();
        return view('pages.admin.dataRiwayatTindakan.index', compact('historis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Histori $histori)
    {
        // $komplain = Komplain::find('id');

        // if ($histori == $komplain) {
        //     return view('pages.admin.dataRiwayatTindakan.index', [
        //         'historis' => $histori
        //     ]);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Histori $histori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Histori $histori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Histori $histori)
    {
        //
    }
}
