<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brands;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Admin.index');
    }

    public function admin_register(){

        return view('Admin.Log.register');
    }

    public function admin_login(){

        return view('Admin.Log.login');
    }

    public function admin_reset(){

        return view('Admin.Log.reset');
    }


    public function orders(){
        return view('Admin.orders');
    }

    public function brands(){
        $brands = Brands::all();

        return view('Admin.brands')->with( 'brands', $brands);
    }

    public function attributes(){
        return view('Admin.attributes');
    }

    public function add_attribute(){
        return view('Admin.add-attribute');
    }

    public function add_brand(){
        return view('Admin.add-brand');
    }

    public function add_new_brand( Request $request ){

        if ( $request->hasFile( 'brand_img' ) )
        {
            $request->validate(
                [
                    'brand_img'  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'brand_name' => 'required',
                ]
            );

            $directory = "./assets/images/brands/category/";
            $path = $_FILES['brand_img']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $img_nm    = $request->brand_name.'@'.time().'.'.$ext;

            $filename = $directory.$img_nm;
            if( move_uploaded_file($_FILES["brand_img"]["tmp_name"],  $filename) )
            {
                Brands::create(
                    [
                        'name'=> $request->brand_name,
                        'image'=> $img_nm
                    ]);
                    return redirect( '/administration/brands');
            }
            return "hlo";
        }
        return $request;
    }

    public function add_category()
    {
        return view('Admin.Layouts.add_category');
    }

    public function view_category(){
        $categs = Category::all();
        return view('Admin.Layouts.view_category')->with('categs', $categs);
    }

    public function view_add_sub_category(){

        $categs = Category::all();
        return view('Admin.Layouts.add_sub_category')->with('p_ctgs', $categs);
    }

    public function add_sub_category(Request $request){
        
        if( $request->hasFile('sub_cat_img') )
        {
        $request->validate(
            [
                'sub_cat_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'sub_cat_title' => 'required|unique:sub_categories,title'
            ]
        );

        $directory = './sub_categ_icons/';
        $img_nm = time().'.'.basename( $_FILES['sub_cat_img']['name']);
        $filename = $directory.$img_nm;

        if( move_uploaded_file($_FILES["sub_cat_img"]["tmp_name"],  $filename) )
        {
            SubCategory::create(
                [
                    'title' => $request->sub_cat_title,
                    'parent_id' => $request->cat_parent,
                    'img_address'=> $img_nm
                ]
            );
            return redirect()->route('./administration/sub-category');//route('Admin.Layouts.view_sub_category');
        }
    }
}

    public function view_sub_category(){
        $categs = SubCategory::all();
        $pids = Category::all();
        return view('Admin.Layouts.view_sub_category')->with( [ 'categs'=> $categs , 'pids' => $pids ] );
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
        if ( isset( $request->is_p ) )
        {
            $is_prnt = "yes";
        }else {
            $is_prnt = "no";
        }

        Category::create(
            [
                'Parent_cat_title'  => $request['cat_title'],
                'Parent_cat_desc'   => $request['cat_desc'],
                'Parent_cat_img'    => 'cat.jpg',//$request['cat_img'],
                'Parent_cat_status' => $request->status,//'available'//$request['cat_status']
                'cat_is_parent'     => $is_prnt
            ]);
        return redirect()->route('/administration/view_category');
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
