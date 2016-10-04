<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class siswa extends Controller
{
    public function register(){
    	return view('siswa/register');
    }
}
