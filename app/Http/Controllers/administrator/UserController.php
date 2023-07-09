<?php

namespace App\Http\Controllers\administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showPembeli(){
        return view('pages.administrator.user.dataPembeli');
    }
}