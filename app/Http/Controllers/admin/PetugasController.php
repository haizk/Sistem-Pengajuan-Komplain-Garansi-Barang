<?php

namespace App\Http\Controllers\admin;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetugasController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dataRiwayatTindakan.petugas', [
            'title' => 'Petugas',
            'petugas' => Petugas::all()
        ]);
    }
}
