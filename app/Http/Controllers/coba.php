<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coba extends Controller
{
    public function main()
    {
        return view('layouts.main');
    }
    public function blog()
    {
    $data = [
        'judul' => 'Laravel Dasar',
        'pengarang' => 'Naufal K.H.N',
        'isi' => 'Ini adalah halaman blog pertama yang membahas dasar-dasar Laravel.'
    ];

    return view('pages.blog', $data);
    }

    public function kontak()
    {
        return view('pages.contact');
    }
    public function home()
    {
        return view('pages.home');
    }

}
