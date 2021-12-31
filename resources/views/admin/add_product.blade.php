
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
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Add Product</strong>
                            </div>
                            <div class="card-body">
                                
                                <div id="category">
                                    <div class="card-body">
                
                                        <form action="{{ url('./administration/add/product') }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                           
                                        <div class="col-lg-8 col-md-8 col-sm-8">                                            

                                            <div class="form-group">
                                                <label for="p_type" class="control-label mb-1">Product Type</label>
                                                <select name="p_type" class="form-control" id="Product_type">
                                                    
                                                    <option value="Simple Product"     >Simple Product</option>
                                                    <option value="Variable Product"   >Variable Product</option>
                                                    <option value="Digital Product"    >Digital Product</option>
                                                    <option value="Physical Product"   >Physical Product</option>
                                                    <option value="Event Base Product" >Event Base Product</option>
                                                    

                                                </select>
                                            </div>
                                            
                                            <div class="row" id="">

                                            <div class="form-group p-2 ml-4">
                                                <input type="checkbox" name="virtual">
                                                <label for="virtual" class="control-label mb-1">Virtual</label>                                                       
                                            </div>

                                            <div class="form-group p-2">
                                                <input type="checkbox" name="downloadable">
                                                <label for="downloadable" class="control-label mb-1">Downloadable</label>                                                       
                                            </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="product_title" class="control-label mb-1">Title</label>
                                                <input id="product_title" name="product_title" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="A new Product">
                                            </div>

                                            <div class="row">

                                                <div class="form-group col-md-4">
                                              
                                                  <label for="price" class="control-label mb-1">Price($)</label>
                                                  <input name="price" type="number" class="form-control">
                                              
                                                </div>
                                              
                                                <div class="form-group col-md-4">
                                              
                                                  <label for="sale_price" class="control-label mb-1">Sale Price($)</label>
                                                  <input name="sale_price" type="number" class="form-control">
                                                  <span href="#" class="ml-5 text-primary" id="toggletime" style="text-decoration: underline">schedule time</s>
                                              
                                                </div>
                                              
                                              </div>
                                              
                                              <div class="row" id="time-sec" style="display: none;">
                                              
                                                <div class="form-group col-md-4">
                                              
                                                  <label for="start_p_date" class="control-label mb-1">From</label>
                                                  <input name="start_p_date" type="date" class="form-control">
                                              
                                                </div>
                                              
                                                <div class="form-group col-md-4">
                                              
                                                  <label for="stop_p_date" class="control-label mb-1">To</label>
                                                  <input name="stop_p_date" type="date" class="form-control">
                                              
                                                </div>
                                              
                                              </div>

                                                <div class="form-group">
                                                    <label for="brand" class="control-label mb-1">Brand</label>
                                                    <select class="form-control" name="brand">
                                                    @if ( count( $brands ) > 0 )
                                                        @foreach( $brands as $brand )
                                                        <!--option> -- Select Brand -- </option-->
                                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
    
                                                </div>

                                            <div class="form-group">
                                                <label for="product_description"> Short Product Description</label>
                                             <textarea name="product_description" class="form-control" height="50">

                                             </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="product_description"> Long Product Description</label>
                                             <textarea name="product_description_lg" class="form-control" height="50">

                                             </textarea>
                                            </div>                                                                                      

                                                <div class="form-group">
                                                    <label for="brand" class="control-label mb-1">Product Label</label>
                                                    <select class="form-control" name="p_label">
                                                        <option> -- Select Type-- </option>
                                                        <option>Hot</option>
                                                        <option>New</option>
                                                    </select>
    
                                                </div>

                                            <div class="form-group">
                                                <label for="product_status" class="control-label mb-1">Product Status</label>
                                                <select class="form-control" name="product_status">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>

                                            </div>                                             

                                        </div>

                                        

                                        
                                       {{-- Sidebar Section Starts--}}

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="p_img" class="control-label mb-0">Add Images</label>
                                                <input type="file" name="p_img" class="form-control p-1">
                                            </div>
                                        </div>
                                       {{-- Category Form Section --}}
                                       <div class="form-group col-md-4" id="cat_parent">
                                        <label for="cat_parent" class="control-label mb-1">Category</label>
                                        <select class="form-control" name="cat_parent" id="cat_parent">
                                          
                                            @if( count( $parent_categ ) > 0)
                                                @foreach( $parent_categ as $pctgs )
                                                    <option value={{$pctgs->id}} >{{$pctgs->Parent_cat_title}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                      
                                      </div>
                                      
                                      <div class="form-group col-md-4" id="sub_cat">
                                        <label for="sub_cat" class="control-label mb-1">Sub Category</label>
                                      
                                        <select class="form-control" name="sub_cat" id="sub_cat">
                                          
                                            @if( count( $sub_categ ) > 0)
                                                @foreach( $sub_categ as $sctgs )
                                                    <option value={{$sctgs->id}} >{{$sctgs->title}}</option>
                                                @endforeach
                                            @endif
                                          
                                          <!--option> -- Select Sub Category -- </option-->
                                          <!--   Fashion   ->
                                          <option value="fas">Clothes</option>
                                          <option value="fas">Shoes</option>
                                          <option value="fas">Belts</option>
                                          <option value="fas">Caps</option-->
                                      
                                          <!--  Electronics    ->
                                          <option value="elect">Fan</option>
                                          <option value="elect">Television</option>
                                          <option value="elect">Speaker</option-->
                                      
                                          <!--   Furnitures   ->
                                          <option value="furn">Chairs</option>
                                          <option value="furn">Table</option-->
                                        </select>
                                      </div>

                                        <div class="form-group col-md-4">
                                            <label for="tags" class="control-label mb-1">Tags</label>
                                            <textarea name="tags" class="form-control">
                                                
                                            </textarea>
                                        </div>

                                        {{-- Sidebar Section Ends --}}

                                        {{-- Big Section starts --}}

                                        <div class="col-md-12 col-sm-12 col-lg-12">

                                            <div class="card">
                                                <div class="card-header"> <h3><i class="menu-icon ti-briefcase"></i> Inventory <span style="font-size: 16px">Manage inventory for the product</span>
                                                </h3> </div>
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
                                                        <input type="checkbox" name="enable_sku" id="enable_qty">
                                                        <label for="enable_sku"  class="control-label mb-1">Enable Stock Management System</label>                                                       
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
                                                        <input type="checkbox" name="single_order">
                                                        <label for="single_order" class="control-label mb-1">Allow only one quantity of this product to be bought in a single order</label>                                                       
                                                    </div>
                                                
                                                </div>

                                            </div>

                                            {{-- Shipping Section Starts --}}

                                            <div class="card">
                                                <div class="card-header"> <h3><i class="menu-icon ti-truck"></i> Shipping & Tax <span style="font-size: 16px"> Manage shipping and tax for this product</span>
                                                </div></h3> 

                                                <div class="card-body">
                                                         
                                                    <div class="form-group">
                                                        <input type="checkbox" name="enable_shipping" id="enable_shipping">
                                                        <label for="enable_shipping" class="control-label mb-1">Does this product require shipping</label>                                                       
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
                                                    
                                                    <div class="form-group">
                                                     <label for="shipping_class" class="control-label mb-1"> Shipping Class</label>
                                                     <select class="form-control" name="shipping_class">
                                                         <option>No Shipping Class</option>
                                                         <option>Shipping class</option>
                                                     </select>
                                                     <span style="color: grey">Shipping class are used by certain shipping methods to group similar product</span>
                                                    </div>

                                                    {{-- <div class="col-md-4 form-group">
                                                       
                                                        <label for="tax_status" class="control-label mb-1">Tax Status</label>
                                                        <select  name="tax_status" class="form-control">
                                                            <option>Taxable</option>
                                                            <option>Non Taxable</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 form-group">
                                                       
                                                        <label for="tax_class" class="control-label mb-1">Tax Class</label>
                                                        <select  name="tax_class" class="form-control">
                                                            <option>Standard</option>
                                                            <option>None Standard</option>
                                                        </select>
                                                    </div> --}}

                                                    
                                                </div>
                                                

                                            </div>

                                            {{-- Shipping Section Ends --}}

                                             {{-- Variation Section Starts --}}

                                            <div class="card">
                                                <div class="card-header"> <h3><i class="menu-icon ti-briefcase"></i> Variable Product<span style="font-size: 16px"> Add Variation for this product</span>
                                                </div></h3> 
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <input type="checkbox" name="color_&_size" id="color_size">
                                                        <label for="color_&_size" class="control-label mb-1">Does your product requires color and size for variable product?</label>                                                       
                                                    </div>
                    
                                                        <div class="row">

                                                                <div class="form-group col-md-4 color_vs_size" id="cat_parent">
                                                                    <label for="size" class="control-label mb-1">Sizes Added From Attribute</label>
                                                                    <select class="form-control" name="size" id="size">
                                                                      <option> -- Select Name Of Sizes -- </option>
                                                                      <option value="fas">Shoes</option>
                                                                      <option value="furn">T-Shirt</option>
                                                                    </select>
                                                                  
                                                                  </div>
    
                                                                  <div class="form-group col-md-4 color_vs_size" id="cat_parent">
                                                                    <label for="color" class="control-label mb-1">Color Names Added From Attribute</label>
                                                                    <select class="form-control" name="color" id="color">
                                                                      <option> -- Select Colors -- </option>
                                                                      <option value="fas">Blue</option>
                                                                      <option value="furn">Red</option>
                                                                    </select>
                                                                  
                                                                  </div>

                                                              <div class="form-group col-md-4" id="cat_parent">
                                                                <label for="other_attribute" class="control-label mb-1">Other Attributes</label>
                                                                <select class="form-control" name="other_attribute" id="other_attribute">
                                                                  <option> -- Select Colors -- </option>
                                                                  <option value="fas">Blue</option>
                                                                  <option value="furn">Red</option>
                                                                </select>
                                                              
                                                              </div>

                                                            {{-- <div class="form-group col-md-6">

                                                                <label for="product_color" class="control-label  mb-1">Add Product Color</label>
                                                                <input name="product_color" type="color" class="form-control form-control-color">
                
                                                            </div>

                                                            <div class="form-group col-md-4">

                                                                <label for="product_size" class="control-label mb-1">Product Size</label>
                                                                <input name="product_size" class="form-control" type="text" placeholder="SM, MD, XL, XXL">
                
                                                            </div>   --}}

                                                        </div>
                                                </div>

                                            </div>

                                             {{-- Variable Section Ends --}}

                                             {{-- Other Section Starts --}}

                                             <div class="card">
                                                <div class="card-header"> <h3><i class="menu-icon ti-briefcase"></i> Product Commission & Others<span style="font-size: 16px"> Add Variation for this product</span>
                                                </div></h3> 
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
                                                     <textarea name="purchase_note" class="form-control" height="50">
        
                                                     </textarea>
                                                    </div>
                                                        
                                                </div>

                                            </div>

                                             {{-- Other Section Ends --}}


                                        </div>
                                         {{-- Big Section Ends--}}
                                       
                                              <div class="col-md-12 col-lg-12 col-sm-8 mt-12">
                                                <button id="submit" type="submit" class="btn btn-lg btn-success btn-block">
                                                    <span id="submit">Add Product</span>
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