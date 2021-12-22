<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
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

    public function my_account(){
        
        return view('my-account');
    }

    public function login(){

        return view('login');
    }

    public function cart(){

        return view('cart');
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
