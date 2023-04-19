<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderController extends Controller
{
    public function order()
    {
        $orders = Order::with('user', 'product')->get();

        return view('admin.order', ['orders' => $orders]);
    }
    public function delivered($id)
    {
        $order = Order::find($id);

        $order->delivery_status = 'delivred';
        $order->payement_status = 'paid';
        $order->save();
        return back();
    }
    public function print($id)
    {
        $order = Order::find($id);
        $test = Order::with('user', 'product')->find($id);
        $pdf = PDF::loadView('admin.pdf', ['order' => $order]);
        return $pdf->download('order_details.pdf');
    }
    public function sendEmail($id)
    {
        $order = Order::with('user', 'product')->find($id);


        return view('admin.email_info', ['order' => $order]);
    }

    public function send_user_email(Request $request, $id)
    {
        $order = Order::with('user', 'product')->find($id);
        $details = [
            'greeting' => $request->greeting,
            'firstline' => $request->firstline,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
            'lastline' => $request->lastline,
        ];
        Notification::send($order->user, new SendEmailNotification($details));
        return redirect()->back();
    }
    public function searchdata(Request $request)
    {
        $search = $request->search;
        $orders = Order::with('user', 'product')
            ->whereHas('user', function ($query) use ($search) {
                $query->where('name', '=', $search);
            })->OrwhereHas('product', function ($query) use ($search) {
                $query->where('title', '=', $search);
            })->OrwhereHas('user', function ($query) use ($search) {
                $query->where('email', '=', $search);
            })
            ->get();

        return view('admin.order', ['orders' => $orders]);
    }
}
