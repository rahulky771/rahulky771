<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;


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

    // echo "rahul yadav"; dd();
    return view('welcome');
});
// Route::get('/home', function () {
//     // echo "mohit11111"; dd();
//     return view('home');
// });

// Route::get('/about/{name}',function($name){
//     // echo $name;
//     return view('about',['name'=>$name]);
// });
Route::get('user',[UserControllers::class,'getUser']);
Route::get('aboutuser',[UserControllers::class,'aboutUser']);
Route::get('user/{name}',[UserControllers::class,'getUserName']);
Route::get('admin',[UserControllers::class,'adminLogin']);