<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function donasi(){
        return view('pages.donasi');
    }
    public function zakat(){
        return view('pages.zakat');
    }
    public function login(){
        return view('pages.login');
    }
}
