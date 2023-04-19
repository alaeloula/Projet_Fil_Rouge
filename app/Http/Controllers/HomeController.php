<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Reply;
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
            $orders = Order::with('user', 'product')->get();
            $totalerevenu = 0;
            foreach ($orders as $order) {
                $totalerevenu += $order->quantite * $order->product->price;
            }

            $data = [
                'totalproduct' => Product::all()->count(),
                'totalorder' => Order::all()->count(),
                'totaluser' => User::where('usertype', '=', 0)->count(),
                'totalerevenu' => $totalerevenu,
                'OrderDelivred' => Order::where('delivery_status', '=', 'delivred')->count(),
                'OrderProcessing' => Order::where('delivery_status', '=', 'processing')->count(),

            ];
            return view('admin.home', ['data' => $data]);
        } else {
            $comments = Comment::with('user')->get();
            $products = Product::with('category')->paginate(2);
            $replies = Reply::with('user', 'comment')->get();
            return view('home.userpage', ['products' => $products, 'comments' => $comments,'replies'=>$replies]);
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
        return view('home.stripe', ['totalePrice' => $totalePrice]);
    }
    public function stripePost(Request $request, $totalePrice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
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

    public function order_user()
    {
        if (Auth::id()) {

            $orders = Order::with('user', 'product')
                ->where('user_id', '=', Auth::id())
                ->get();

            return view('home.order', ['orders' => $orders]);
        } else {
            return redirect('login');
        }
    }
    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delivery_status = 'cancled';
        $order->save();
        return redirect()->back();
    }


    public function add_comment(Request $request)
    {
        if (Auth::id()) {
            $comment = new Comment();
            $comment->user_id = Auth::id();
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function add_reply(Request $request)
    {
        $reply = new Reply();
        $reply->user_id = Auth::id();
        $reply->comment_id = $request->commentid;
        $reply->reply = $request->reply;
        $reply->save();
        return back();
    }
}
