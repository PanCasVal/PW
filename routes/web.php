<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LookupController;
use App\Http\Controllers\CommentController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get( "example",function ()
{
    return view("example.index");
});
Route:: get("inicio", function (){
    return view("inicio.index");
});
Route:: get("abp", function (){
    return view("abp.index");
});
Route:: get("Ingresa", function (){
    return view("Ingresa.index");
});
Route:: get("Informacion", function (){
    return view("Informacion.index");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("test", function ()
{
    return view("test.index");
});
Route::resource('posts', PostController::class, ['names' => [
    'index' => 'posts.index',
    'store' => 'posts.new',]
]);


Route::resource('tags', TagController::class);

Route::resource('lookups', LookupController::class);

Route::resource('comments', CommentController::class);

