<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        echo "Halaaman Artikel dengan ID".$id;
    }
}
