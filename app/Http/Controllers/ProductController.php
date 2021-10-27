<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    
    public function index(){
        $data = Product::all();
        return view('product', ['products'=>$data]);
    }
    public function detail($id){
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->product_id = $req->product_id;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->save();
            return redirect('/');  //Just to check the form and controller
        }else{
            return redirect('/login');
        }
    }
    static function itemCount(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    public function cartList(){
        $user_id = Session::get('user')['id'];

        $product = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id', $user_id)
        ->select('products.*', 'carts.id as cartId')
        ->get();
         
         return view('cart_list', ['products'=>$product]);
    }
    public function removeCart($id){
        Cart::destroy($id);
        return redirect('/cart_list');
    }

    public function orderNow(){
        $user_id = Session::get('user')['id'];

        $total = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id', $user_id)
        ->sum('products.price');

        return view('/ordernow', ['total'=>$total]);
    }

    public function orderPlace(Request $req){
        $user_id = Session::get('user')['id'];
        $all_cart = Cart::where('user_id', $user_id)->get();
        foreach($all_cart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "Pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pending";
            $order->address = $req->address; 
            $order->save();  
            Cart::where('user_id', $user_id)->delete();
        }

        return redirect('/');
    }

    public function myOrders(){
        $user_id = Session::get('user')['id'];

        $product = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $user_id)
        ->select('products.*', 'orders.*', 'orders.id as orderId')
        ->get();
         return view('myorders', ['products'=>$product]);
    }

}
