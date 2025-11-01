<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function main(){
        return view('layouts.main');
    }
    public function home(){
        return('home');
    }
    public function product(){
        return view('pages.produk');
    }
    public function transaction(){
        return('home');
    }
    public function report(){
        return('laporan');
    }
}
