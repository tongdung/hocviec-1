<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyControll;
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
Route::group(['prefix'=>'group'],function(){
    Route::get('User1',function(){
        echo "User 1";
    });
    Route::get('User2',function(){
        echo "User 2";
    });
    Route::get('User3',function(){
        echo "User 3";
    });
});
Route::get('MyControll',[MyControll::class,'xinchao']);

Route::get('goiten/{ten}',[MyControll::class,'goiten']);

Route::get('yeucau',[MyControll::class,'GetData']);

Route::get('getForm',function(){
    return view('postForm');
});
Route::post('postForm',[MyControll::Class,'postForm'])->name('postForm');
