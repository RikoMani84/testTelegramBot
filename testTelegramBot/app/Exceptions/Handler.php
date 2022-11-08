<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */

    public function report(Throwable $e)
    {
        $data= [
            'description'=> $e->getMessage(),
            'file'=>$e->getFile(),
            'line'=>$e->getLine(),
        ];
        \Illuminate\Support\Facades\Http::post("https://api.telegram.org/bot5730394305:AAEJRueWmhbv6Hh_IQvHrrIsTx3WQw25TEk/sendMessage", [
            'chat_id'=>818093929,
            'text'=>(string)view('report', $data),
            'parse_mode'=>'html'
        ]);
    }

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
