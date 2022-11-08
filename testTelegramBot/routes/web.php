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
    \Illuminate\Support\Facades\Http::post("https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendMessage", [
        'chat_id'=>818093929,
        'text'=>"<b>Hello world</b>",
        'parse_mode'=>'html'
    ])
});
