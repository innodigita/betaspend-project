
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
                        <li class="active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Form  Section Starts --}}

                  <div class="col-lg-12">
                        <div class="card shadow rounded">
                            <div class="card-header bg-white">
                                <strong class="card-title">Add Product</strong>
                            </div>

                        </div>
                                
                                <div id="category">

                                        <form action="{{ url('./administration/add/product') }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                           
                                        <div class="col-lg-8 col-md-8 col-sm-8">                                            
                                              
                                            <div class="bg-white p-4 mb-3 round-border shadow">
                                            <div class="form-group">
                                                <label for="p_type" class="control-label mb-1 font-weight-bold">Product Type</label>
                                                <select name="p_type" class="form-control" id="Product_type">                                               
                                                    <option value="Simple Product"     >Simple Product</option>
                                                    <option value="Variable Product"   >Variable Product</option>
                                                    <option value="Digital Product"    >Digital Product</option>
                                                    <option value="Physical Product"   >Physical Product</option>
                                                    <option value="Eventbase Product"  >Event base Product</option>
                                                </select>
                                            </div>
                                            
                                            <div class="row" id="">

                                            <div class="form-group p-2 ml-4">
                                                <label class="switch switch-3d switch-primary">
                                                    <input type="checkbox" name="virtual" class="switch-input" id="no-shipping"> 
                                                    <span class="switch-label"></span> <span class="switch-handle"></span>
                                                </label> Virtual
                                            </div>

                                            <div class="form-group p-2">
                                                <label class="switch switch-3d switch-primary">
                                                    <input type="checkbox" name="downloadable" class="switch-input" id="downloadable"> 
                                                    <span class="switch-label"></span> <span class="switch-handle"></span>
                                                </label> Downloadable                                                       
                                            </div>

                                            </div>

                                            <div id="download-file" >
                                                <h6 class="m-1 p-1 bg-transparent border-0">Downloadable files</h6>
                                                <div class="bg-white round-border shadow border  border-dark">

                                                <div id="append-section">
                                                <div class="append-move">
                                                    
                                                    <div class="col-md-6 form-group">
                                                    <label for="file_name" class="label-control font-weight-bold"> Name </label>
                                                    <input style="font-size: 12px;" class="form-control" type="text" placeholder="File Name" name="file_name">
                                                    </div>
                                
                                                    <div class="col-md-6 form-group">
                                                        <label for="file_url" class="label-control font-weight-bold"> FilL URl </label>
                                                        <input style="font-size: 12px;" type="URL" name="file_url" class="form-control file-url" placeholder="Https://" value="">
                                                    </div>       		
                                                </div>
                                                </div>
                                
                                                <div id="append-section-to"></div>
                                            
                                                <div class="form-group col-md-2">
                                                    <button  class="btn btn-outline-light mt-1 ml-2 border border-primary text-primary rounded" style="font-size: 12px;" type="button" id="add-field"> add File </button>
                                                </div>
                                                <div class=" form-group col-md-2">
                                                    <button  class="btn btn-outline-light mt-1 mr-6 border border-danger text-danger rounded" style="font-size: 12px;" type="button" id="remove-field"> Remove</button>
                                                </div>

                                             
                                            <div class="form-group col-md-12" >
                                                <hr>
                                                <label for="download_limit" class="label-control">Download Limit</label>
                                                <input class="form-control" type="number" name="download_limit" placeholder="Unlimited">
                                                <small>Leave blank for unlimited re-downloads.</small>
                                            </div>
                                
                                            <div class="form-group col-md-12">
                                                <label for="download_expire" class="label-control">Download expiry</label>
                                                <input class="form-control" type="number" name="download_expire" placeholder="Never">
                                                <small>Enter the number of days before a download link expires, or leave blank.</small>
                                            </div>
                            
                                            </div>
                                    
                                          </div>

                                            <div class="form-group">
                                                <label for="product_title" class="control-label mb-1 font-weight-bold">Title</label>
                                                <input id="product_title" name="product_title" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="A new Product" required>
                                            </div>

                                            <div class="row">

                                                <div class="form-group col-md-6">
                                              
                                                  <label for="price" class="control-label mb-1">Price($)</label>
                                                  <input name="price" type="number" class="form-control"  required>
                                              
                                                </div>
                                              
                                                <div class="form-group col-md-6">
                                              
                                                  <label for="sale_price" class="control-label mb-1">Sale Price($)</label>
                                                  <input name="sale_price" type="number" class="form-control"  required>
                                                  <span href="#" class="ml-5 text-primary change-text" id="toggletime" style="text-decoration: underline">schedule time</s>
                                              
                                                </div>
                                              
                                              </div>
                                              
                                              <div class="row" id="time-sec" style="display: none;">
                                              
                                                <div class="form-group col-md-6">
                                              
                                                  <label for="start_p_date" class="control-label mb-1">From</label>
                                                  <input name="start_p_date" type="date" class="form-control"  required>
                                              
                                                </div>
                                              
                                                <div class="form-group col-md-6">
                                              
                                                  <label for="stop_p_date" class="control-label mb-1">To</label>
                                                  <input name="stop_p_date" type="date" class="form-control"  required>
                                              
                                                </div>
                                              
                                              </div>

                                                <div class="form-group">
                                                    <label for="brand" class="control-label mb-1 font-weight-bold">Brand</label>
                                                    <select class="form-control" name="brand">
                                                    @if ( count( $brands ) > 0 )
                                                        @foreach( $brands as $brand )
                                                        <!--option> -- Select Brand -- </option-->
                                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
    
                                                </div>
                                        </div>

                                            <div class="form-group bg-white p-4 round-border shadow">
                                                <label for="product_description " class="font-weight-bold"> Short Product Description</label>
                                             <textarea name="product_description" class="form-control"  required id="myeditor"></textarea>
                                            </div>

                                            <div class="form-group bg-white p-4 round-border shadow">
                                                <label for="product_description" class="font-weight-bold"> Long Product Description</label>
                                             <textarea name="product_description_lg" rows="5" cols="50"  class="form-control" height="50" required id="editor">

                                             </textarea>
                                            </div>                                                                                      
                                                <div class="bg-white p-3 mb-3 round-border shadow">
                                                <div class="form-group">
                                                    <label for="brand" class="control-label mb-1 font-weight-bold">Product Label</label>
                                                    <select class="form-control" name="p_label">
                                                        
                                                        <option>Hot</option>
                                                        <option>New</option>
                                                    </select>
    
                                                </div>

                                            <div class="form-group">
                                                <label for="product_status" class="control-label mb-1 font-weight-bold">Product Status</label>
                                                <select class="form-control" name="product_status">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>

                                            </div>  
                                                </div>                                           

                                        </div>

                                        

                                        
                                       {{-- Sidebar Section Starts--}}

                                        
                                       {{-- Category Form Section --}}
                                       <div class="form-group col-md-4 bg-white pt-2 pb-3 round-border shadow" id="cat_parent">
                                        <label for="cat_parent" class="control-label mb-1 font-weight-bold">Category</label>
                                        <select class="form-control"  name="cat_parent" id="cat_parent_s" >
                                            <option value='0'>--Select Parent Category--</option>
                                            @if( count( $parent_categ ) > 0)
                                                @foreach( $parent_categ as $pctgs )
                                                    <option value={{$pctgs->id}}>{{$pctgs->Parent_cat_title}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                      
                                      </div>
<script>

function ajaxP( CID, csrf_token, type, url) {
   
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {

//        alert(xmlhttp.readyState +' '+ xmlhttp.status);

        if ( xmlhttp.readyState == XMLHttpRequest.DONE && xmlhttp.status == 200) {
            var data = xmlhttp.responseText;
            
            var dt = data.split('|');
            

            //for ( var i=0; i<dt.length; i++ ){
                   
                  // else
                //   alert( dt[i]);
              //  }

            if ( dt.length > 0 ){
                let options = document.getElementById( 'sub_cat_se' ).options;
                document.getElementById(  options[0].id ).selected="selected";
                for ( var i=0; i<options.length; i++ ){
                  //  alert( dt[i]);
                   
                    if ( dt.includes ( options[i].id ) ){;
                    document.getElementById( options[i].id ).style.display="block";
                    }else{
                        document.getElementById( options[i].id ).style.display="none";
                    }
                }
                
            }
        }
    };

    xmlhttp.open(type, url, true);
     
    var data = new FormData();
    data.append('CID', CID );
    xmlhttp.setRequestHeader('x-csrf-token', csrf_token);
    xmlhttp.send( data );
}

document.getElementById("cat_parent_s").addEventListener("change", function () {
           var d = document.getElementById('cat_parent_s').value;
           var csrf = document.querySelector("meta[name='csrf-token']").getAttribute('content');
           
               ajaxP(
               d,
               csrf,
               "POST",
               "{{ route('/product/get_subC') }}"
               );
           
});

</script>    
                                      <div class="form-group col-md-4 bg-white pt-2 pb-3 shadow round-border" id="sub_cat">
                                        <label for="sub_cat" class="control-label mb-1 font-weight-bold">Sub Category</label>
                                      
                                        <select class="form-control" name="sub_cat" id="sub_cat_se">
                                            <option id=0 value=0>--Select Sub Category--</option>
                                            @if( count( $sub_categ ) > 0)
                                                @foreach( $sub_categ as $sctgs )
                                                    <option id="{{$sctgs->id}}" value={{$sctgs->id}} style="display:none">{{$sctgs->title}}</option>
                                                @endforeach
                                            @endif
                                          
                                          
                                        </select>
                                      </div>

                                        <div class="form-group col-md-4 shadow round-border pb-3 pt-2 bg-white">
                                            <label for="tags" class="control-label mb-1 font-weight-bold">Tags <small class="text-danger"> ( Press the comma after you typed. ) </small></label>
                                            <div class="tag-container">
                                            <input class="form-control " />
                                            </div>
                                        </div>

                                        {{-- Sidebar Section Ends --}}

                                        {{-- Big Section starts --}}

                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                               
                                            {{-- Products Images starts --}}
                                            <div class="card shadow p-4 round-border">
                                                <div class="card-header">
                                                    <span class="font-weight-bold"> Product Images/ Gallery </span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="p_img">Add Product Image</label>
                                                            <div class="input-group mb-3">
                                                                <input type="file" class="form-control" required name="p_img" accept="image/png, image/jpeg" id="inputGroupFile02">
                                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                              </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group container gallery">
                                                            <label  class="control-label mb-2 mt-1 font-weight-bold text-center">Add Gallery Images</label>
                                                            <input  required multiple onchange="preview();" type="file" id="gallery-image" accept="image/png, image/jpeg" name="p_gallery_img" class="form-control p-1">
                                                            <label  for="gallery-image"  class="label-gallery control-label mb-0"><i class="fa fa-upload"></i> Upload Gallery</label>
                                                            <p id="no-of-files" class="mt-2">No File Choosen</p>
                                                            <div id="all-imgs"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            {{-- Product Video Starts --}}
                                            <div class="card shadow p-4 round-border">
                                                <div class="card-header">
                                                    <span class="font-weight-bold"> Product Videos</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="label-control" for="video-source">Video Source</label>
                                                            <select class="form-control" name="vide-source">
                                                                <option>Youtube</option>
                                                                <option>Vimeo</option>
                                                                <Option>Dailymotion</Option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="video_link" class="label-control">Video Link</label>
                                                            <input type="url" placeholder="Video Link " class="form-control" name="video_link">
                                                            <span>Use proper link without extra parameter. Don't use short share link/embeded iframe code.</span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="card shadow p-4 round-border">
                                                <div class="card-header"> <span class="font-weight-bold"><i class="menu-icon ti-briefcase"></i> Inventory <span style="font-size: 16px">Manage inventory for the product</span>
                                                </span> </div>
                                                <div class="card-body">
                                                   
                                                 <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="sku" class="control-label mb-1">SKU <span>(Stock Keeping Unit)</span></label>
                                                        <input type="text" name="sku" placeholder="Stock Keeping Unit" class="form-control" >
        
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="stock_status" class="control-label mb-1">Stock Status</label>
                                                        <select class="form-control " name="stock_status">
                                                            <option value="">In Stock</option>
                                                            <option value="">Out Of Stock</option>
                                                        </select>
        
                                                    </div>
                                                </div>
                                                    
                                                   
                                                    <div class="form-group">
                                                        <label class="switch switch-3d switch-primary">
                                                            <input type="checkbox" name="enable_sku" class="switch-input" id="enable_qty"> 
                                                            <span class="switch-label"></span> <span class="switch-handle"></span>
                                                        </label> Enable Stock Management System
                                                    </div>

                                                    <div class="row" id="stock_low_qty">
                                                        <div class="form-group col-md-6">
                                                            <label for="stock_qty" class="control-label mb-1">Stock quantity</label>
                                                            <input type="number" name="stock_qty" class="form-control" >
            
                                                        </div>
    
                                                        <div class="form-group col-md-6">
                                                            <label for="low_stock" class="control-label mb-1">Low stock threshold</label>
                                                            <input type="number" name="low_stock" class="form-control" >
            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="switch switch-3d switch-primary">
                                                            <input type="checkbox" name="single_order" class="switch-input"> 
                                                            <span class="switch-label"></span> <span class="switch-handle"></span>
                                                        </label> Allow only one quantity of this product to be bought in a single order                                                     
                                                    </div>
                                                
                                                </div>

                                            </div>

                                            {{-- Shipping Section Starts --}}

                                            <div class="card shadow p-4 round-border" id="hide_shipping">
                                                <div class="card-header"> <span class="font-weight-bold"><i class="menu-icon ti-truck"></i> Shipping <span style="font-size: 16px"> Manage shipping for this product</span>
                                                </div></h3> 

                                                <div class="card-body">
                                                         
                                                    <div class="form-group">
                                                        <label class="switch switch-3d switch-primary">
                                                            <input type="checkbox" name="enable_shipping" class="switch-input" id="enable_shipping"> 
                                                            <span class="switch-label"></span> <span class="switch-handle"></span>
                                                        </label> Does this product require shipping                                                   
                                                    </div>

                                                    <div class="row" id="shipping_control">                                                  
    
                                                        <div class="form-group col-md-3">
                                                          <input placeholder="Weight(ibs)" name="weight" class="form-control" type="number">
                                                        </div>
    
                                                        <div class="form-group col-md-3">
                                                            <input placeholder="Length(in)" name="length" class="form-control" type="number">
                                                          </div>
    
                                                          <div class="form-group col-md-3">
                                                            <input placeholder="Width(in)" name="Width" class="form-control" type="number">
                                                          </div>
    
                                                          <div class="form-group col-md-3">
                                                            <input placeholder="height(in)" name="height" class="form-control" type="number">
                                                          </div>
    

                                                    </div>
                                                    
                                                    <div class="form-group col-md-8">
                                                     <label for="shipping_class" class="control-label mb-1"> Shipping Class</label>
                                                     <select class="form-control" name="shipping_class">
                                                         <option>No Shipping Class</option>
                                                         <option>Shipping class</option>
                                                     </select>
                                                     <span style="color: grey">Shipping class are used by certain shipping methods to group similar product</span>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Shipping Section Ends --}}

                                             {{-- Attribute Section Starts --}}

                                            <div class="card shadow p-4 round-border">
                                                <div class="card-header"> <span class="font-weight-bold"><i class="menu-icon ti-briefcase"></i> Product Attribute & Variable </span>
                                                </div> 
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label class="switch switch-3d switch-primary">
                                                            <input type="checkbox" name="color_var" class="switch-input" id="color_var"> 
                                                            <span class="switch-label"></span> <span class="switch-handle"></span>
                                                        </label> Do you need color?                                                   
                                                    </div>
                                                    
                    
                                                    <div class="">

                                                      <div class="form-group row col-md-10 " id="color_select">
                                                        <div class="col-md-2">
                                                            <div class="input-group-prepend float-right">
                                                                <label class="font-weight-bold input-group-text" for="Attributes">Colors</label>
                                                            </div>
                                                        </div>
                                                          <div class="select-input mb-3 col-md-8">
                                                            <select class="my-select w-100 selectpicker" data-live-search="true" data-actions-box="true" multiple data-selected-text-format="count > 3" multiple>
                                                                <option disabled>No Color Selected</option>
                                                                <option value="1" data-content='<span class="badge text-white" style="background-color:#ff0000;">Red</span>'> Red </option>
                                                                <option value="2" data-content='<span class="badge text-white" style="background-color:#FFFF00;">Yellow</span>'> Yellow </option>
                                                                <option value="3" data-content='<span class="badge text-white" style="background-color:#008000;">Green</span>'> Green </option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        

                                                        <div class="row col-md-10">
                                                            <div class="col-md-2">
                                                                <div class="input-group-prepend float-right">
                                                                    <label class="font-weight-bold input-group-text" for="Attributes">Attributes</label>
                                                                </div>
                                                            </div>
                                                            <div class="select-input col-md-8">
                                                                   <select class="my-select w-100 selectpicker" name="attribute_select" data-live-search="true" data-actions-box="true"  id="attribute_select">
                                                                       <option>Nothing Selected</option>
                                                                       <option value="size"> Size </option>
                                                                       <option value="fabric"> Fabric </option>
                                                                   </select>                                                                  
                                                            </div>
                                                        </div>
                                                        
                                                           <div class="col-md-8 p-3">
                                                               <small>Choose the attributes of this product and then input values of each attribute</small>
                                                           </div>
                                                           
                                                           <div >
                                                           <div class="row col-md-10" id="attribute_show">
                                                               {{-- <div class="class-attribute"></div> --}}
                                                            <div class="col-md-2">
                                                                <div class="input-group-prepend float-right">
                                                                    <button type="button" style="background-color: #fcc7e9;" class="btn round-border text-dark" id="confiqure-items"><i class="fa fa-cogs text-danger"></i> Confiqure</button>
                                                                </div>
                                                            </div>
                                                            <div class="select-input col-md-6">
                                                                   <select class="my-select w-100 selectpicker" id="attri-items" name="attri-items" data-actions-box="true" data-live-search="true">
                                                                       <option selected>Nothing Selected</option>
                                                                       <option class="size" value="1"> XXL </option>
                                                                       <option class="size" value="1"> XL </option>
                                                                       <option class="size" value="1">S</option>
                                                                       <option class="fabric" value="2">Tafita</option>
                                                                       <option class="fabric" value="2">white lace</option>
                                                                   </select>                                                                  
                                                            </div>
                                                            
                                                            <div class="col-md-2">
                                                                <button type="button" style="background-color: #fcc7e9;" class="btn round-border" id="remove-attribute"><i class="fa fa-trash-o text-danger"></i></button>
                                                            </div>
                                                         </div>
                                                        </div>

                                                         <div class="row col-md-10" id="attribute_append"></div>

                                                        <div class="col-md-10 mt-4 border p-4">
                                                        
                                                            <div class="col-md-3">
                                                                <span class="font-weight-bold">Variant Names</span>
                                                                <hr>
                                                                <div class="form-group mb-5">
                                                                    <button class="btn rounded" style="background-color: #fcc7e9; color:#000000;" ><i class="fa fa-plus"></i> Size</button>
                                                                </div>

                                                                <hr>
                                                                <div class="form-group">
                                                                    <span class="font-weight-bold mt-4">Inventory </span>
                                                                </div>

                                                                <hr class="m-0 p-0">
                                                                <div class="form-group mt-5">
                                                                    <span class="font-weight-bold">Variable Image</span>
                                                                </div>

                                                            </div>

                                                            <div class="col-md-9">
                                                                <span class="font-weight-bold"> Variants Properties </span>
                                                                <hr>
                                                                     
                                                                <div class="row">
                                                                   <div class="input-group mb-3 col-md-6 form-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Default" value="60" aria-describedby="inputGroup-sizing-default">
                                                                    </div>

                                                                    <div class="input-group mb-3 col-md-6 form-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroup-sizing-default">Sales</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Default" value="60" aria-describedby="inputGroup-sizing-default">
                                                                    </div>
                                                                </div>

                                                                    <hr>
                                                                    <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroup-sizing-default">SKU</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Default" value="60" aria-describedby="inputGroup-sizing-default">
                                                                    </div>

                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="StockStatus">Stock Status </span>
                                                                        </div>
                                                                        <select class="form-control " name="stock_status" id="StockStatus">
                                                                            <option value="">In Stock</option>
                                                                            <option value="">Out Of Stock</option>
                                                                        </select>
                                                                    </div>

                                                                    <hr>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                                        </div> 
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                </div>

                                            </div>
                                        </div>

                                             {{-- Attribute and Variable Section Ends --}}

                                             {{-- Other Section Starts --}}

                                             <div class="card shadow p-4 round-border">
                                                <div class="card-header"><span class="font-weight-bold"><i class="menu-icon ti-briefcase"></i> Product Commission & Others</span>
                                                </div> 
                                                <div class="card-body">

                                                    <div class="row">
                                                      
                                                        <div class="form-group col-md-4">

                                                            <label for="commission_rate" class="control-label mb-1">Product Commision for Affiliate</label>
                                                            <select class="form-control" name="commission_rate">
                                                                <option>percent(%)</option>
                                                                <option>Fixed Rate</option>
                                                            </select>
            
                                                        </div>

                                                        <div class="form-group col-md-4">

                                                            <label for="product_commission" class="control-label mb-1">Product Commision for Affiliate (Rate)</label>
                                                            <input name="product_commission" class="form-control" type="number">
            
                                                        </div>

                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="purchase_note"> Purchase Note</label>
                                                     <textarea name="purchase_note" class="form-control"></textarea>
                                                    </div>
                                                        
                                                </div>

                                            </div>

                                             {{-- Other Section Ends --}}

                                         {{-- Big Section Ends--}}
                                       
                                              <div class="col-md-12 col-lg-12 col-sm-8 mt-0" style="margin-bottom: 50px;">
                                                <button id="submit" type="submit" class="btn btn-lg btn-success btn-block shadow rounded">
                                                    <span id="submit">Add Product</span>
                                                    <span id="submitting" style="display:none;">Adding New Record</span>
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                    
                        </div> 

                    </div>
                    

    {{--  Form  Section Ends --}}
</div>


@endsection