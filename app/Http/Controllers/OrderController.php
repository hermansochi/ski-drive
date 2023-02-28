<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->input('position'));
        $order = Order::create([
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'position' => $request->input('position'),
            'phone' => $request->input('phone'),
        ]);


        $from = "+11234567890";
        $from = $request->input('phone');
        $to = sprintf("+7%s%s%s%s",
            substr($from, 1, 3),
            substr($from, 4, 3),
            substr($from, 7, 2),
            substr($from, 9, 2)
        );

        $message = 'ID: ' . $order->id . ' IP: ' . $request->ip();
        //$message = ' IP: ' . $request->ip();
        $message .= ' position: ' . $request->input('position');
        $message .= ' phone: ' . $to;
        //$message .= ' created at: ' . $order->created_at;
        Log::channel('telegram')->info($message);

        return new OrderResource($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
