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
}
