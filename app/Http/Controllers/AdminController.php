<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function home(){
        return view('home');
    }
}
