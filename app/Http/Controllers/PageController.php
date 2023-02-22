<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Andhito Galih Nur Cahyo | 2141720138";
    }

    public function articles($id){
        echo "Hlaaman Artikel dengan ID".$id;
    }
}
