


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
                        <li><a href="#">Brands</a></li>
                        <li class="active">Add Brand</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Form  Section Starts --}}

                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Attribute</strong>
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6 shadow border border-5 border-primary">

                                    <div id="category">
                                        <div class="card-body"> 
                                            <div class="card-title">
                                                <h3 class="text-center">Add Attribute</h3>
                                            </div>
                                            <hr>
                                            <form action="{{ url('./administration/attributes') }}" method="post" novalidate="novalidate">
                                            @csrf
                                               
                                                <div class="form-group">
                                                    <label for="attribute_name" class="control-label mb-1">Name</label>
                                                    <input id="attribute_name" name="attribute_name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Attribute Name">
                                                </div>
                                                    
                                                <hr>
                                                
                                                <div class="form-group">
                                                    <input type="checkbox" name="enable_size_color" id="enable_variation">
                                                    <label for="enable_size_color"  class="control-label mb-1 text-danger" aria-required="true" aria-invalid="false">Do you want to include Color and Size?</label>                                                       
                                                </div>
                                                <hr>
                                                
                                                   <div id="for_size_color">
                                                <div class="row">
                                                      
                                                    <div class="form-group col">
                                                        <label for="color_name" class="control-label mb-1">Color Name</label>
                                                        <input id="color_name" name="color_name" type="text" class="form-control" placeholder="Red, Blue, Green">
                                                    </div>

                                                    <div class="form-group col">
                                                        <label for="color" class="control-label mb-1">Color</label>
                                                        <input id="color" name="color" type="color" class="form-control" aria-required="true" aria-invalid="false">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                       
                                                    <div class="form-group col">
                                                        <label for="size_name" class="control-label mb-1">Size Name</label>
                                                        <input id="size_name" name="size_name" type="text" class="form-control"  placeholder="Enter Size, SM, ML">
                                                    </div>

                                                    <div class="form-group col">
                                                        <label for="size" class="control-label mb-1">Size</label>
                                                        <input id="size" name="text" type="size" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Size">
                                                    </div>

                                                </div>
                                            </div>
                                                    
                                                    <div>
                                                        <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">
                                                            <span id="submit">Add Attribute</span>
                                                            <span id="submitting" style="display:none;">Adding New Record</span>
                                                        </button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>

                                  </div>
                                  <div class="col-md-3"></div>
                                </div>

                            </div>
                        </div> {{-- Card Ends --}}

                    </div>
                    

    {{--  Form  Section Ends --}}
</div>





@endsection
