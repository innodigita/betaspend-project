
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
                        <li class="active">Add sub category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Form  Section Starts --}}

                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Sub Category</strong>
                            </div>
                            <div class="card-body">
                                
                                <div id="category">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Add Sub Category</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ url('./administration/add-sub-category') }}" type="multipart/form-data" method="post" novalidate="novalidate">
                                        @csrf
                                           
                                            <div class="form-group">
                                                <label for="sub_cat_title" class="control-label mb-1">Sub Category Name</label>
                                                <input id="sub_cat_title" name="sub_cat_title" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Name of sub category">
                                            </div>                                         

                                            <div class="form-group">
                                                <label for="cat_parent" class="control-label mb-1">Select Parent Category</label>
                                                <select class="form-control" name="cat_parent">
                                                    <option>Select</option>
                                    @if( count( $p_ctgs ) > 0)
                                        @foreach( $p_ctgs as $pctg )
                                                    <option value={{$pctg->id}} >{{$pctg->Parent_cat_title}}</option>
                                        @endforeach
                                    @endif
                                                </select>

                                            </div>

                                                <div class="form-group">
                                                    <label for="sub_cat_img" class="control-label mb-1">Sub Category Image</label>
                                                    <input name="sub_cat_img" type="file" class="form-control p-1">
                                                    
                                                </div>
                                                
                                                <div>
                                                    <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">
                                                        <span id="submit">Add Sub Category</span>
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
