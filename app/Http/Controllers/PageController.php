<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
    echo "<h1>Selamat Datang</h1>";
    }

    public function about() {
    echo "<h1>Nama : Abiyasa Putra Prasetya</h1>";
    echo "<h1>NIM : 2141720203</h1>";
    }

    public function articles($id){
        echo "<h1>Halaman Artikel dengan ID $id</h1>";
    }
}
