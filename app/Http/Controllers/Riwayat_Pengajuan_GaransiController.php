<?php

namespace App\Http\Controllers;

use App\Models\Riwayat_Pengajuan_Garansi;
use Illuminate\Http\Request;

class Riwayat_Pengajuan_GaransiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.dataPengajuanGaransi.index', [
            'riwayat_pengajuan_garansi' => Riwayat_Pengajuan_Garansi::all()
        ]);
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
    public function show(Riwayat_Pengajuan_Garansi $riwayat_Pengajuan_Garansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riwayat_Pengajuan_Garansi $riwayat_Pengajuan_Garansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Riwayat_Pengajuan_Garansi $riwayat_Pengajuan_Garansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayat_Pengajuan_Garansi $riwayat_Pengajuan_Garansi)
    {
        //
    }
}
