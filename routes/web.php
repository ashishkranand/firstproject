<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/demo',function(){
// //     return view('demo');
// // });

// Route::post('/demoo',function(){
//     echo "Hello Demo!!!"; //error
// });

// Route::any('/demoo',function(){
//     echo "Hello Demo test!!!";
// });


// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     echo $name. " ";
//     echo $id;
// });


// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     $data = compact('name','id');
//     return view('demo')->with($data);
// });

// Route::get('/{name?}',function($name=null){
//     $demo ="<h2>Ashish kumar anaand</h2>";
//     $data =compact('name','demo');
//     return view('home')->with($data);
// });




// Route::get('/',function(){
//     return view('homee');
// });
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get('/course',function(){
//     return view('courses');
// });


Route::get('/',[DemoController::class,'index']);
// Route::get('/about',[DemoController::class,'about']); //Both this line and below line can be use
Route::get('/about','App\Http\Controllers\DemoController@about');
Route::get('/course',[DemoController::class,'course']);