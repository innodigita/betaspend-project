<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class TemplateController extends Controller
{
    
    public function index(){
        
        $products = Products::all();
        
        
        $deals_of_the_day = Products::all();
        $new_arrivals = Products::all();//orderby('created_at', 'desc');
        $featured = Products::all();
        $most_popular = Products::all();
        $best_seller = Products::all();
        
        return view('Layout.index')->with(
            [
                'data'         => $products,
                'dealsOfDay'   => $deals_of_the_day,
                'new_arrivals' => $new_arrivals,
                'featured'     => $featured,
                'most_popular' => $most_popular,
                'best_seller'  => $best_seller
            ]
        );
    }

    public function contact(){

        return view('contact');
    }

    public function become_a_vendor(){

        return view('become-a-vendor');
    }

    public function vendors(){

        return view('vendors');
        
    }

    public function vendors_list(){

        return view('vendors-list');
        
    }

    public function vendors_details(){

        return view('vendors-details');

    }

    public function vendors_details_list(){

        return view('vendors-details-list');
        
    }

    public function my_account(){
        
        return view('my-account');
    }

    public function login(){

        return view('login');
    }

    public function cart(){

        return view('cart');
    }

    public function clear_cart(){
        session()->flush();
        return view('cart');
    }

    public function add_to_cart( Request $request){
        
        $product = Products::find($request->pid);
        $id = $request->pid;
        
        $cart = session()->get('cart_new', []);
  
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {
            
            $cart[$id] = [
                "name" => $product->Product_name,
                "quantity" => $request->pq,
                "price" => $product->Price,
                "image" => $product->Product_img
            ];
        }
         
        session()->put('cart_new', $cart);

        return session('cart_new');
    }

    public function wishlist(){

        return view('wishlist');
    }

    public function compare(){

        return view('compare');
    }

    public function checkout(){

        return view('checkout');
    }
}
