<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControll extends Controller
{
    public function xinchao(){
        echo 'xin chao cac ban';
    }

    public function goiten($ten){
        echo 'ten cua ban la'. $ten;
    }
    public function GetData(Request $req){
        echo $req->url();
    }
    public function postForm(Request $req){
        echo $req->Hoten;
       
    }

}

