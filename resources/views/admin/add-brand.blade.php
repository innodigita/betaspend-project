


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
                                <strong class="card-title">Add Brand</strong>
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6 border border-5 border-primary">

                                    <div id="category">
                                        <div class="card-body"> 
                                            <div class="card-title">
                                                <h3 class="text-center">Add Brand</h3>
                                            </div>
                                            <hr>
                                            <form action="{{ url('./administration/brands') }}" method="post" novalidate="novalidate">
                                            @csrf
                                               
                                                <div class="form-group">
                                                    <label for="brand_name" class="control-label mb-1">Name</label>
                                                    <input id="brand_name" name="brand_name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Brand Name">
                                                </div>
                                                
                                                    <div class="form-group">
                                                        <label for="brand_img" class="control-label mb-1">Brand Image (140 X 140)</label>
                                                        <input name="brand_img" type="file" class="form-control p-1">
                                                        
                                                    </div>
                                                    
                                                    <div>
                                                        <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">
                                                            <span id="submit">Add Brand</span>
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
