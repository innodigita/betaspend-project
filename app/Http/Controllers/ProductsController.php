<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brands;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Products::all();
        $categs   = Category::all();
        $brands   = Brands::all();

      return view('Products.shop')->with( 
                                            [
                                                'Products'   => $products,
                                                'categories' => $categs,
                                                'brands'     => $brands
                                            ] );
    }

    public function product_details($prodId){

        $product = Products::find( $prodId );
        
        $categ   = Category::find( $product->product_category_id );
        $brand   = Brands::find( $product->brand );
        
        return view('products.details')->with( 
            [
                'product'   => $product,
                'category' => $categ,
                'brand'     => $brand
            ] );
    }

    ///////////////////////



    public function sess() {
        /*
        session( [ 'cart' => [ 'name'=> 'TV',
                               'Quantity' => 34
                               ] ] );*/
        
                               if ( session()->has('cart') ){
              var_dump( session('cart') );

              echo session('cart.name');
              session()->push( 'cart.name', 'PC');
              echo "\t";
              echo session('cart.name');
              echo "\t";
        }
        else{
           return session()->all();
        }
        return session()->all();
    }
    ///////////////////////////

    public function add_product(){

        $P_categ   = Category::all();
        $Sub_categ = SubCategory::all();
        $brands    = Brands::all();
        
        return view('Admin.add_product')
               ->with( 
                   [
                        'parent_categ' => $P_categ,
                        'sub_categ'    => $Sub_categ,
                        'brands'       => $brands
                   ]);
    }

    public function view_product(){

        $products = Products::all();
        return view('Admin.view_product')->with('products', $products);
    }

    public function bs_product_details(){
        return view('Products.bs-product-details');
    }

    public function bs_digital_service(){
        return view('Products.bs-digital-service');
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


        if( $request->hasFile('p_img') )
        {
            
            $request->validate(
                [
                    'p_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'product_title' => 'required',
                //'sub_cat_title' => 'required|unique:sub_categories,title'
                ]
            );
            $directory = './assets/images/products/product_images/';
            $img_nm = time().'.'.basename( $_FILES['p_img']['name']);
            $filename = $directory.$img_nm;
            if( move_uploaded_file($_FILES["p_img"]["tmp_name"],  $filename) )
            {
                Products::create(
                    [
                    
                    'product_type'             => $request->p_type,
                    'Product_name'             => $request->product_title,
                    'Price'                    => $request->price,
                    'sale_Price'               => $request->sale_price,
                    'Product_date'             => $request->start_p_date,
                    'Product_end_date'         => $request->stop_p_date,
                    'Product_desc'             => $request->product_description,
                    'Product_long_desc'        => $request->product_description_lg,
                    'Product_label'            => $request->p_label,
                    'Product_status'           => $request->product_status,
                    //'Product_img'              => $request->im,
                    'product_category_id'      => $request->cat_parent, 
                    'Product_sub_category_id'  => $request->sub_cat,
                    'tags'                     => $request->tags,
                    'brand'                    => $request->brand,

                    'Sku'                      => 'Null',        //$request->sku,
                    'Unit_weight'              => 0,            //$request->weight,
                    'Color'                    => 'Null',      //$request->product_color,
                    'Quantity'                 => 0,          //$request->quantity,
                    'Size'                     => 0,         //$request->product_size,

                    'Vendor_id'=>rand(),
                    'Vendor_product_id'=>rand(),
                    'Discount'=>Str::random(10),
                    'Unit_weight'=>Str::random(10),
                    'Unit_in_stock'=>rand(),
                    'Unit_in_order'=>rand(),
                    'Recorder_level'=>Str::random(10),
                    'Product_available'=>Str::random(10),
                    'Discount_available'=>Str::random(10),
                    'Current_order'=>Str::random(10),
                    'Product_img'=>$img_nm,
                    'Product_review'=>Str::random(10),
                    'Additional_note'=>Str::random(10),
                    'Available_size'=>rand(),
                    'Available_color'=>Str::random(10),
                    
                    ]
                    );
                    return redirect('/administration/view-product');
            }
            return "Upload Error";
        }
        return "No Image";

        

        
/*
        echo "<br>".$request->p_type;
        echo "<br>".$request->product_title;
        echo "<br>".$request->price;
        echo "<br>".$request->sale_price;
        echo "<br>".$request->start_p_date;
        echo "<br>".$request->stop_p_date;
        echo "<br>".$request->quantity;
        echo "<br>".$request->brand;
        echo "<br>".$request->product_description;
        echo "<br>".$request->product_description_lg;
        echo "<br>".$request->p_label;
        echo "<br>".$request->product_size;
        echo "<br>".$request->product_status;
        echo "<br>".$request->cat_parent;
        echo "<br>".$request->sub_cat;
        echo "<br>".$request->tags;
        */
        
        
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
