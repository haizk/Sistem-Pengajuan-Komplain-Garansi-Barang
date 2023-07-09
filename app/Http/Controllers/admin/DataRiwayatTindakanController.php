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
    public function store(Request $request){
        $validated = $request->validate([
            'tanggal_tindakan' => ['required', 'date'],
            'tindakan' => ['required', 'string'],
            'id_komplain' => ['required', 'int'],
            'id_petugas' => ['required', 'int'],
        ]);

        if(!$validated){
            return redirect()->route('pages.admin.dataPengajuanGaransi.index')->with('error', 'validated failed!');
        }
        // Proses penyimpanan data barang dengan foto
        $idAdmin = auth()->user()->id;
        $status = 'Pending';

        // Create Menu
        Histori::Create([
            'tanggal_tindakan' => $validated['tanggal_tindakan'],
            'tindakan' => $validated['tindakan'],
            'id_komplain' => $validated['id_komplain'],
            'id_petugas' => $validated['id_petugas'],
        ]);

        return redirect()->route('pages.admin.dataRiwayatTindakan.index')->with('success', 'Created Successfully');

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
