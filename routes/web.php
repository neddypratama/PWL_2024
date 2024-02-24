<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/greeting', [WelcomeController::class, 'greeting']);


// Route::resource('photos', PhotoController::class)->only(['index', 'show']);

// Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);
   
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return '2141762101 Neddy Pratama';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Post ke- '.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

// Route::get('/mahasiswa', function () {
//    $arrMhs = ["Bangkit", "Ferly", "Hendra", "Rahmat", "Neddy"];
//    return view('politeknik/mahasiswa', ['mahasiswa' => $arrMhs]);
// });

// Route::get('/dosen', function () {
//     $arrDosen = ["Budi", "Hendra", "Prima", "Zahwa", "Khairy"];
//     return view('politeknik/dosen', ['dosen' => $arrDosen]);
//  });