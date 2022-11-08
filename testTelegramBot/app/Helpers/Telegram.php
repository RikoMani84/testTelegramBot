<?php

namespace App\Helpers;

class Telegram
{
    public function sendMessage($chat_id, $message){
        \Illuminate\Support\Facades\Http::post("https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendMessage", [
            'chat_id'=>$chat_id,
            'text'=>$message,
            'parse_mode'=>'html'
        ]);
    }
}
//
