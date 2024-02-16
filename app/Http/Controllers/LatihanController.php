<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index(){

        $name_book = "Marmut merah Jambu";
        $rilis = "Tahun 2018";
        $price = "Rp. 70.000";
        $writer = "Raditya Dika";

        return view('latihan', compact("name_book", "rilis", "price", "writer"));
    }
}
