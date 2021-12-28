


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
                        <li class="active"><a href="#">Category</a></li>
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
                        <strong class="card-title">Data Table</strong>
                        <div class="pt-2">
                            <span>All(5) |</span>
                            <span class="text-danger">Complete(5) |</span>
                            <span class="text-danger">Pending(3) |</span>
                            <span class="text-danger">On-Hold(2) |</span>
                            <span class="text-danger">Processing(4) |</span>
                            <span class="text-danger">Cancelled(8)</span>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="bootstrap-data-table-export_length">
                                <label>Show <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>                                   
                                    <option value="-1">All</option>
                                </select>
                                 entries</label>
                                </div>
                            </div>
                            
                            <div class="float-right">
                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <form>
                                    <div class="input-group mb-4">
                                        <label for="filter" class="control-label p-1">Filter</label>
                                        <input type="search" class="form-control" placeholder="Filter Orders">
                                        <button class="btn btn-success" type="button" id="bt-filter">Filter</button>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Orders</th> 
                                    <th>Orders Total</th>                                   
                                    <th>Status</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                    <td>1</td>
                                    <td>Order 130</td>
                                    <td>$47.00</td>
                                    <td><span class="bg-primary text-white p-2">Processing</span></td>
                                    <td>Customer1</td>
                                    <td>1 min ago</td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Order 140</td>
                                    <td>$47.00</td>
                                    <td><span class="bg-danger text-white p-2">On-Hold</span></td>
                                    <td>Customer2</td>
                                    <td>2021/12/28</td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Order 150</td>
                                    <td>$400.00</td>
                                    <td><span class="bg-success text-white p-2">Completed</span></td>
                                    <td>Customer3</td>
                                    <td>1 min ago</td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Order 160</td>
                                    <td>$470.00</td>
                                    <td><span class="bg-dark text-white p-2">Cancelled</span></td>
                                    <td>Customer4</td>
                                    <td>2021/12/28</td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Order 170</td>
                                    <td>$460.00</td>
                                    <td><span class="bg-warning text-white p-2">Pending</span></td>
                                    <td>Customer5</td>
                                    <td>55 min ago</td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:100%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>
                                </tr>
                                
                              
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
