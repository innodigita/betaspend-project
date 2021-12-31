
@extends('Admin.Layouts.app')

@section('content')

{{--    Left Sidebar --}}

@include('Admin.Layouts.sidebar')

<div id="right-panel" class="right-panel">

{{--Header Content start--}}

    @include('Admin.Layouts.header_nav')

{{--    Header Content Ends --}}

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Admin Statistic Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        {{-- <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> --}}

        {{-- Stacks Start --}}

        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="row">
                <div class="container">
            <div class="card-group">

                <div class="card col-md-4 no-padding bg-flat-color-1 shadow m-3">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-users text-light"></i>
                        </div>
    
                        <div class="h4 mb-0 text-light">
                            <span class="count">50</span>
                        </div>
                        <small class="text-uppercase font-weight-bold text-light">Total Users</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>

                <div class="card col-md-4 no-padding m-3 shadow">
                    <div class="card-body bg-flat-color-5">
                        <div class="h1 text-right mb-4">
                            <i class="fa fa-cart-plus text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">20</span>
                        </div>
                        <small class="text-light text-uppercase font-weight-bold">Total Orders</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>

                <div class="card col-md-4 no-padding m-3 shadow">
                    <div class="card-body bg-flat-color-4">
                        <div class="h1 text-right text-light mb-4">
                            <i class="fa fa-undo"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">28</span>
                        </div>
                        <small class="text-uppercase font-weight-bold text-light">Total Return Orders</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>

                <div class="card col-md-4 no-padding m-3 shadow">
                    <div class="card-body bg-flat-color-3">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-user-plus text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">10</span>
                        </div>
                        <small class="text-uppercase font-weight-bold text-light">Total Cancelled Orders</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>

            </div>
          </div>
        </div>

        {{-- Second Stat Starts --}}

        <div class="row">
            <div class="container">
        <div class="card-group">

            <div class="card col-md-4 no-padding bg-flat-color-3 shadow m-3">
                <div class="card-body">
                    <div class="h1 text-muted text-left mb-4">
                        <i class="fa fa-users text-light"></i>
                    </div>

                    <div class="h4 mb-0 text-light text-right">
                        <span class="count">50</span>
                    </div>
                    <small class="text-uppercase text-right font-weight-bold text-light">Total Vendors</small>
                    <div class="text-right progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>

            <div class="card col-md-4 no-padding m-3 shadow">
                <div class="card-body bg-flat-color-4">
                    <div class="h1 text-left text-light mb-4">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">28</span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Total Amount Payout</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
             
            <div class="card col-md-4 no-padding m-3 shadow">
                <div class="card-body bg-flat-color-1">
                    <div class="h1 text-left mb-4">
                        <i class="fa fa-google-wallet text-light"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">20</span>
                    </div>
                    <small class="text-light text-uppercase font-weight-bold">Payout Request In Progress</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>

            <div class="card col-md-4 no-padding m-3 shadow">
                <div class="card-body bg-flat-color-5">
                    <div class="h1 text-muted text-left mb-4">
                        <i class="fa fa-money text-light"></i>
                    </div>
                    <div class="h4 mb-0 text-light">
                        <span class="count">100</span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Balance</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>

        </div>
      </div>
    </div>


<div class="row">

    <div class="container">

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Pie Chart</h4>
                    <div class="flot-container">
                        <div id="flot-pie" class="flot-pie-container"></div>
                    </div>
                </div>
            </div><!-- /# card -->
        </div>

    </div>

</div>

    </div>{{-- End of col-sm-12 col-md-12 col-lg-12 --}}
    
</div>{{-- #right-panel --}}



<!-- Right Panel -->



@endsection
