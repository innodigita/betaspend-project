<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

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
        
        
        $request->validate(
            [
                'sub_cat_img' => 'required',//|sub_cat_img|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]
        );
        return "hi";

        $imageName = time().'.'.$request->sub_cat_img->extention;

        return $imageName;
    }

    public function view_sub_category(){
        return view('Admin.Layouts.view_sub_category');
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
