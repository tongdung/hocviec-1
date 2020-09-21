<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/trangchu', function () {
    echo "xin chao cac ban";
})
;
Route::get('/nhap/{ten}',function($ten){
echo "Trang nay cua: ",$ten;
});
Route::get('nhapcodk/{tenb}', function($tenb){
    echo "bien nhap vao bang",$tenb;
})
->where(['tenb'=>'[0-9]+']);
Route::get('doan',['as'=>'Routedoan',function(){
    echo "Hoang Ba Doan";
}]);
Route::get('goiten', function(){
    return redirect()->route('Routethai');
});
Route::get('Goiten2',function(){
    echo "Day la goi ten 2";
}) -> name('Routethai');
