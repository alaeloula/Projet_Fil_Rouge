<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Stripe;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user = Auth::User();
            $products_cart = $user->products;

            $products = Product::with('category')->paginate(2);
            return view('home.userpage', ['products' => $products, 'products_cart' => $products_cart]);
        } else {
            $products = Product::with('category')->paginate(2);
            return view('home.userpage', ['products' => $products]);
        }
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $products = Product::with('category')->paginate(2);
            return view('home.userpage', ['products' => $products]);
        }
    }


    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $cartModel = new Cart;
            $cartModel->product_id = $id;
            $cartModel->quantite = $request->quantite;
            $cartModel->user_id = auth::user()->id;
            $cartModel->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id()) {
            $user = Auth::User();
            $products = $user->products;
            // dd($products);
            return view('home.showcart', ['products_cart' => $products]);
        } else {
            return redirect('login');
        }
    }
    public function remove_cart($id)
    {
        $pd = Cart::find($id);
        $pd->delete();
        return redirect()->back()->with('message', 'order cancled');
    }
    public function cash_order()
    {
        $user = Auth::User();
        $products = $user->products;
        // dd($products);
        foreach ($products as $product) {
            $orderModel = new Order();
            $orderModel->user_id = $user->id;
            $orderModel->product_id = $product->id;
            $orderModel->quantite = $product->pivot->quantite;
            $orderModel->payement_status = 'cash on delivery';
            $orderModel->delivery_status = 'processing';
            $orderModel->save();
            $pd = Cart::find($product->pivot->id);
            $pd->delete();
        }
        return redirect()->back()->with('message', 'we have Recived your Order. We will connect with you soon...');
    }

    public function stripe($totalePrice)
    {
        return view('home.stripe',['totalePrice'=>$totalePrice]);
    }
    public function stripePost(Request $request,$totalePrice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalePrice,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for your payement." 
        ]);

        $user = Auth::User();
        $products = $user->products;
        // dd($products);
        foreach ($products as $product) {
            $orderModel = new Order();
            $orderModel->user_id = $user->id;
            $orderModel->product_id = $product->id;
            $orderModel->quantite = $product->pivot->quantite;
            $orderModel->payement_status = 'PAID';
            $orderModel->delivery_status = 'processing';
            $orderModel->save();
            $pd = Cart::find($product->pivot->id);
            $pd->delete();
        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }


}
