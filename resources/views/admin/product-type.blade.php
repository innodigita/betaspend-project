


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

                  <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card round-border bg-white">
                            <div class="card-header bg-white round-border">
                                <strong class="card-title">Product Types</strong>
                            </div>

                        </div> {{-- Card Ends --}}

                       <div class="row">
                        <div class="container">

                           <div class="col-md-5 round-border bg-white shadow py-mouse m-2">
                            <div class="items p-5">
                             <div class="text-center round-border py-icon"><a href="{{ url('./administration/add-product') }}"><i class="fa fa-product-hunt font-size-large text-white"></i></a></div>
                             <div class="text-center mt-2"><a href="{{ url('./administration/add-product') }}" class="font-weight-bold">Add Physical Product</a></div>
                            </div>
                           </div>

                           <div class="col-md-5 round-border bg-white shadow py-mouse m-2">
                            <div class="items p-5">
                                <div class="text-center round-border py-icon"><a href="#"><i class="fa fa-cc-diners-club font-size-large text-white"></i></a></div>
                                <div class="text-center mt-2"><a href="#" class="font-weight-bold">Add Digital Product</a></div>
                               </div>
                           </div>

                           <div class="col-md-5 round-border bg-white shadow py-mouse m-2">
                            <div class="items p-5">
                             <div class="text-center round-border py-icon"><a href="#"><i class="fa fa-transgender-alt font-size-large text-white"></i></a></div>
                             <div class="text-center mt-2"><a href="#" class="font-weight-bold">Add Variable Product</a></div>
                            </div>
                           </div>

                           <div class="col-md-5 round-border bg-white shadow py-mouse m-2">
                            <div class="items p-5">
                                <div class="text-center round-border py-icon"><a href="#"><i class="fa fa-calendar font-size-large text-white"></i></a></div>
                                <div class="text-center mt-2"><a href="#" class="font-weight-bold">Add Event Base Product</a></div>
                               </div>
                           </div>

                        </div>
                        </div>

                    </div>
                    

    {{--  Form  Section Ends --}}
</div>





@endsection
