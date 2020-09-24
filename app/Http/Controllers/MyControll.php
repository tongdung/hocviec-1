<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function setCookie(){
        $resp = new Response;
        $resp -> withCookie('Thai','Thai dui',1);
        return $resp;
    }
    public function getCookie(Request $req){
       return $req -> Cookie('XSRF-TOKEN');
    }

    public function postFile(Request $request){
        if($request ->hasFile('myfile')){
            $request->file('myfile')->move('img','img.png');
        }
        else{
            echo "khong co file";
        }
    }
    public function getJS(){
        $arr=['Doan','Dung','Thai'];
        return response()->json($arr);
    }
    public function getview(){
        return view('index');
    }
    public function truyen($ten){
        return view('index',['giatri'=>$ten]);
    }
}

