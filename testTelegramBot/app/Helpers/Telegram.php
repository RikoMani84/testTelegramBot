<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Telegram
{
    protected $http;
    public function __construct(Http $http)
    {
        $this->http=$http;
    }

    public function sendMessage($chat_id, $message){
        return $this->http::post( 'https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendMessage', [
            'chat_id'=>$chat_id,
            'text'=>$message,
            'parse_mode'=>'html'
        ]);
    }

    public function sendDocument($chat_id, $file){
        return $this->http::attach('document',Storage::get('/public/photo.png'), 'document.png')
        ->post('https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendDocument', [
            'chat_id'=>$chat_id
        ]);
    }
}

