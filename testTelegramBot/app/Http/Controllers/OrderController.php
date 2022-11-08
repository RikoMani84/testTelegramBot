<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Order  $order, Request  $request){
        $key = base64_encode(md5(uniqid()));
        $order = $order->create([
            'name' => $request->input('name'),
            'email' => $request->input('email2'),
            'product' => $request->input('product'),
            'secret_key' => $key,
        ]);

        event(new OrderStore($order));

        return response()->redirectTo('/');
    }
}
