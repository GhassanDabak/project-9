<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // "id" => 1
        // "user_id" => 1
        // "city" => "Omnis eveniet sequi"
        // "country" => "Myanmar"
        // "firstname" => "Kylynn"
        // "lastname" => "Sherman"
        // "street" => "Eu ut omnis voluptat"
        // "mobile" => 123
        // "total" => 1219
        // "created_at" => "2022-03-25 15:50:18"
        // "updated_at" => "2022-03-25 15:50:18"
        // "name" => "ghassan"
        // "email" => "admin@admin.com"
        // "email_verified_at" => null
        // "password" => "123123123"
        // "remember_token" => null
        // "order_id" => 11
        // "product_id" => 2
        // "bust_circumference" => 0.0
        // "waistline" => 0.0
        // "hip_circumference" => 0.0
        // "shoulder_width" => 0.0
        // "back_length" => 0.0
        // "height" => 0.0
        // "sleeve_length" => 0.0
        // "arm" => 0.0
        $orders = Order::join('users','orders.user_id','=','users.id')
        ->join('order_items','orders.id','=','order_items.order_id')->get
        (['firstname','lastname','city','country','street','order_id','product_id']);
        return view('admin.orders.index', compact('orders'));
    }

    public function insertReact(Request $request)
    {
        $newOrder = new Order();
        $newOrder->user_id = $request['user_id'];
        $newOrder->total = $request['total'];
        $newOrder->city = $request['city'];
        $newOrder->street = $request['street'];
        $newOrder->firstname = $request['firstname'];
        $newOrder->lastname = $request['lastname'];
        $newOrder->mobile = $request['mobile'];
        $newOrder->country = $request['country'];
        $newOrder->save();

        $order = Order::whereRaw('id = (select max(`id`) from orders)')->first();

        return response()->json([
            'success'=>"yes",
            'order'=> $order
        ]);
    }

    public function orderItem(Request $request)
    {
        $newOrderItem = new OrderItem();
        $newOrderItem->order_id = $request['order_id'];
        $newOrderItem->product_id = $request['product_id'];
        $newOrderItem->bust_circumference = $request['bust_circumference'];
        $newOrderItem->waistline = $request['waistline'];
        $newOrderItem->hip_circumference = $request['hip_circumference'];
        $newOrderItem->shoulder_width = $request['shoulder_width'];
        $newOrderItem->back_length = $request['back_length'];
        $newOrderItem->height = $request['height'];
        $newOrderItem->sleeve_length = $request['sleeve_length'];
        $newOrderItem->arm = $request['arm'];
        $newOrderItem->save();

        return response()->json([
            'success'=>"yes",
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
