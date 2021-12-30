<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\SubCategory;

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
            return redirect()->route('/administration/sub-category');//route('Admin.Layouts.view_sub_category');
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
        return redirect()->route('administration/view_category');
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
