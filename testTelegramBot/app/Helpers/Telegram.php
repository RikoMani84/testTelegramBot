<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Telegram
{
    protected $http;

    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    public function sendMessage($chat_id, $message, $message_id)
    {
        return $this->http::post('https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/editMessageText', [
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'html',
            'message_id' => $message_id
        ]);
    }

    public function sendDocument($chat_id, $file, $reply_id = null)
    {
        return $this->http::attach('document', Storage::get('/public/' . $file), 'document.png')
            ->post('https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendDocument', [
                'chat_id' => $chat_id,
                'reply_to_message_id' => $reply_id
            ]);
    }

    public function sendButton($chat_id, $message, $button)
    {
        return $this->http::post('https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendMessage', [
            'chat_id' => $chat_id,
            'text' => $message,
            'reply_markup' => $button
        ]);
    }

    public function editButton($chat_id, $message, $button, $message_id)
    {
        return $this->http::post('https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/editMessageText', [
            'chat_id' => $chat_id,
            'text' => $message,
            'reply_markup' => $button,
            'message_id' => $message_id
        ]);
    }
}

