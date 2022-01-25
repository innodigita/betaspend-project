


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
                        <li class="active">All</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Table datas Starts--}}


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-8">
                <div class="card rounded shadow">
                    <div class="card-header">
                        <strong class="card-title">All Colours</strong>
                        <span class="float-right">Size</span>
                    </div>
                    
                    <div class="card-body">

                        <table id="bootstrap-data-table-export" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
   
                                <tr>
                                    <td>1</td>                                   
                                    <td>Red</td>
                                    <td><span style="background-color:#ff0000;" class="color-code"></span></td>
                                    <td>
                                        <a href="#"><span class="rounded-circle text-white bg-warning p-1"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span class="rounded-circle text-white bg-danger p-1"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>

                                </tr>              
                              
                            </tbody>

                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Color</th>
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


            <div class="col-md-4">
                <div class="card rounded shadow">
                    <div class="card-header">
                       <span class="card-title  font-weight-bold">Add New Colour</span>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('./administration/attributes') }}" method="post" novalidate="novalidate">
                            @csrf
                               
                                <div class="form-group">
                                    <label for="attribute_name" class="control-label mb-1">Colour Name</label>
                                    <input id="color_name" name="color_name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Red">
                                </div>
                                <div class="form-group">
                                    <label for="attribute_color" class="control-label mb-1">Choose Color</label>
                                    <input id="attribute_color" name="attribute_color" type="color" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <hr>
                                    
                                    <div>
                                        <button id="submit" type="submit" class="btn btn-primary rounded">
                                            <span id="submit">Add Color</span>{{-- Added the Attribute name to the button here using ID --}}
                                            <span id="submitting" style="display:none;">Adding New Record</span>
                                        </button>
                                    </div>
                            </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
                    

    {{--  Tables Datas Ends --}}



</div>





@endsection
