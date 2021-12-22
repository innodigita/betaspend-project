
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
                        <div class="card">
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
                                        <form action="/administration/category/new" method="post" novalidate="novalidate">
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


                                                <div class="form-group has-success">
                                                    <label for="cc-name" class="control-label mb-1">category icon(only parent category)</label>
                                                    <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                                                    <select name="class_icon" class="form-control">
                                                        <option>Choose Icon class</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <span id="cat-name">Add Category</span>
                                                        <span id="submitting" style="display:none;">Adding New Record</span>
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> {{-- Card Ends --}}

                    </div>
                    

    {{--  Form  Section Ends --}}
</div>





@endsection
