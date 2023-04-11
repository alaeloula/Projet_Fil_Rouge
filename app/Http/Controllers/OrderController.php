<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderController extends Controller
{
    public function order()
    {
        $orders = Order::with('user','product')->get();
        
        return view('admin.order',['orders'=>$orders]);
    }
    public function delivered($id)
    {
       $order=Order::find($id);
      
       $order->delivery_status='delivred';
       $order->payement_status='paid';
       $order->save();
       return back();
    }
    public function print($id)
    {
        $order=Order::find($id);
        $test=Order::with('user','product')->find($id);
        $pdf = PDF::loadView('admin.pdf',['order'=>$order]);
        return $pdf->download('order_details.pdf');
    }
}
