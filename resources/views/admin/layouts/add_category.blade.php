
@extends('Admin.Layouts.app')

@section('content')

{{-- Sidebar Starts --}}

@include('Admin.Layouts.sidebar')

{{--Sidebar Ends--}}


<div id="right-panel" class="right-panel">

    {{--Header Content start--}}

    @include('Admin.Layouts.header_nav')

    {{--    Header Content Ends --}}

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Category</a></li>
                        <li class="active">All</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Form  Section Starts --}}

                  <div class="col-lg-12">
                        
                    <div class="row">

                        <div class="col-md 2"></div>
                        <div class="col-md-8">

                            <div class="card border-primary shadow mt-4">
                                <div class="card-header">
                                    <strong class="card-title">Add Category</strong>
                                </div>
                                <div class="card-body">
                                    
                                    <div id="category">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center">Add Category</h3>
                                            </div>
                                            <hr>
                                            <form action="{{ url('./administration/category/new') }}" method="post" novalidate="novalidate">
                                            @csrf
                                               
                                                <div class="form-group">
                                                    <label for="category_name" class="control-label mb-1">Category Name</label>
                                                    <input id="category_name" name="cat_title" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Name of category">
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="cat_description"> Category Description</label>
                                                 <textarea name="cat_desc" class="form-control" height="50">
    
                                                 </textarea>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="cat_parent" class="control-label mb-1">Is it parent?</label>
                                                    <input type="checkbox" name="is_p">
    
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="cat_parent" class="control-label mb-1">Status</label>
                                                    <select class="form-control" name="status">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                    </select>
    
                                                </div>
    
                                                    <div class="form-group">
                                                        <label for="cat_icon" class="control-label mb-1">category icon for sidebar(only parent category)</label>
                                                        <select name="class_icon" class="form-control">
                                                            <option>Choose Icon class</option>
                                                            <option>w-icon-tshirt2</option>
                                                            <option>w-icon-home</option>
                                                            <option>w-icon-electronics</option>
                                                            <option>w-icon-furniture</option>
                                                            <option>w-icon-heartbeat</option>
                                                            <option>w-icon-gift</option>
                                                            <option>w-icon-gamepad</option>
                                                            <option>w-icon-ice-cream</option>
                                                            <option>w-icon-ice-cream</option>
                                                            <option>w-icon-ios</option>
                                                            <option>w-icon-camera</option>
                                                            <option>w-icon-ruby</option>
                                                            <option>w-icon-angle-right</option>
                                                            <option>w-icon-angle-left</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div>
                                                        <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">
                                                            <span id="submit">Add Category</span>
                                                            <span id="submitting" style="display:none;">Adding New Record</span>
                                                        </button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
    
                                </div>
                            </div> {{-- Card Ends --}}

                        </div>
                        <div class="col-md-2"></div>

                    </div>

                    </div>
                    

    {{--  Form  Section Ends --}}
</div>





@endsection
