


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
                        <li><a href="#">Attributes</a></li>
                        <li class="active">configure Attribute</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Table datas Starts--}}


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-4">

                <form action="{{ url('./administration/config-attribute') }}" method="post" novalidate="novalidate">
                    @csrf
                       
                        <div class="form-group">
                            <label for="attribute_name" class="control-label mb-1">Name</label>
                            <input id="attribute_name" name="attribute_name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Attribute Name">
                        </div>
                            
                        <hr>
                        
                    <div id="attribute_option">
                        
                        <div class="row">
                               
                            <div class="form-group col" id="attri_color">
                                <label for="color" class="control-label mb-1">Choose Color </label>
                                <input id="color" name="color" type="color" class="form-control select_color" aria-required="true" aria-invalid="false">         
                            </div>

                            <div class="form-group col" id="attri_img">
                                <label for="image" class="control-label mb-1">Choose Image </label>
                                <input id="image" name="image" type="file" class="form-control p-1" aria-required="true" aria-invalid="false">                                                                                           
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

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Attributes Data Table</strong>
                        <a href="{{ url('./administration/add-attribute') }}" class=" float-right btn btn-success" style="border-radius: 5px;">Add Attribute</a>
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
                            
                            <div class="col-sm-12 col-md-6">
                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Attribute</th>
                                    <th>Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
   
                                <tr>
                                    <td>1</td>                                   
                                    <td>Red</td>
                                    <td><span style="background-color:#ff0000;" class="color-code"></span></td>
                                    <td><span class="btn btn-outline-success rounded">2</span></td>
                                    <td>
                                        <a href="#"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:50%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:50%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>

                                </tr>              
                              
                            </tbody>
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Attribute</th>
                                    <th>Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
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
