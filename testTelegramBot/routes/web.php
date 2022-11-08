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

Route::get('/', function (\App\Helpers\Telegram $telegram) {
    $buttons = [
        'inline_keyboard' => [
            [
                [
                    'text' => 'button4',
                    'callback_data' => '1'
                ]
            ],
            [
                [
                    'text' => 'button3',
                    'callback_data' => '3'
                ]
            ]

        ]
    ];

    $sendMessage = $telegram->sendButton(818093929, 'test2', $buttons, 39);
    $sendMessage = json_decode($sendMessage);
    dd($sendMessage);
});
