<?php

namespace App\Http\Controllers\administrator;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showPembeli(){
        $pembeli = User::where('role', 'Pembeli')->paginate(25);
        return view('pages.administrator.user.dataPembeli', ['pembeli' => $pembeli]);
    }
}