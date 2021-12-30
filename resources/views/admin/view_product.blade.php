


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
                        <li><a href="#">Products</a></li>
                        <li class="active">View Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Table datas Starts--}}


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Products Data Table</strong>
                        <a href="{{ url('./administration/add-product') }}" class=" float-right btn btn-success" style="border-radius: 5px;"><i class="menu-icon ti-plus"></i>Add Product</a>
                    </div>
                    
                    <div class="card-body">
                        <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <form>
                            <div class="dataTables_length" id="bootstrap-data-table-export_length">

                                <label><select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="">All Dates </option>
                                    <option value="25">25</option>                                   
                                    <option value="-1">All</option>
                                </select>
                                 </label>
                                </div>
                                <div>
                                 <select name="parent_cat" aria-controls="bootstrap-data-table-export"  class="custom-select form-select col-md-4 mb-2">
                                    <option value="10">Select Category</option>
                                    <option value="25">Fashion</option>                                   
                                    <option value="-1">Electronics</option>
                                </select><button class="btn btn-primary mb-2 rounded-top rounded-bottom" name="filter">filter</button>
                                 
                                </div>
                                                            
                            </form>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <label><input type="search" class="form-control" placeholder="Search Products" aria-controls="bootstrap-data-table-export"></label>
                                    <button class="btn btn-primary m-1 rounded-top rounded-bottom" name="P_search">Search</button>
                                </div>
                            </div>
                        </div>
                        </div>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>image</th>                                  
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>SKU</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th> Product Type</th>
                                    <th>Views</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @if( count ( $products ) > 0 )
                                    @foreach( $products as $product)  
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{url('assets/images/products/product_images/'.$product->Product_img)}}" alt="Product Image" width="80" height="80"></td>
                                    <td>{{$product->Product_name}}</td>
                                    <td><span class="bg-success text-white p-1">{{$product->Product_status}}</span></td>
                                    <td>{{$product->Sku}}</td>
                                    <td>In Stock</td>
                                    <td>{{$product->Price}}</td>
                                    <td>{{$product->product_type}}</td>
                                    <td>5</td>
                                    <td>{{$product->product_date}}<br><span>Published</span></td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>

                                </tr>
                                    @endforeach
                                @endif
                                
                              
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="bootstrap-data-table-export_info" role="status" aria-live="polite">Showing 1 to 50 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table-export_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="bootstrap-data-table-export_previous">
                                    <a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="bootstrap-data-table-export_next"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
                    

    {{--  Tables Datas Ends --}}



</div>





@endsection
