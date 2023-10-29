<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderCollection;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return all ordes who belongs only the the logged in user based on token Id.
        return new OrderCollection(Order::where('user_id', auth()->user()->id)->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //validate enties by request
        $request->validated($request->all());

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'user_name' => $request->user_name,
            'address' => $request->address,
            'products' => $request->products,
            'price' => $request->price
        ]);

        return response([
            'order' => $order
        ],200);

    }
}
