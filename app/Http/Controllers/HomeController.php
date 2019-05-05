<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function get_deneme(){
        $adim = 'Benim adım oguzhan';
        return view('deneme')->with('isim',$adim);
    }


    public function get_form(){
        return view('form');
    }


    public function post_form( Request $reruest){
        $birinci = $reruest->birinci;
        $ikinci = $reruest->ikinci;
        $toplam = $birinci + $ikinci;
        return view('form')->with('toplam',$toplam);
    }
}
