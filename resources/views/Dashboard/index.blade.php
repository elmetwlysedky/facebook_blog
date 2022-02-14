
@extends('Dashboard.layouts.app')

@section('title')
    home
@endsection




@section('js')

    <script src="/Dashboard/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection





@section('content')



    <!-- Page header -->
    <div class="card">
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Daily financials -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="font-weight-semibold">Site stats</h5>
            <div class="header-elements">

            </div>
        </div>

        <div class="card-body">


            <ul class="media-list">
                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-grid6 "></i></a>
                    </div>

                    <div class="media-body">
                        <h6>Category number since the site started <a href="">{{$category->count()}}</a></h6>
                        <div class="text-muted"></div>
                    </div>


                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-images2"></i></a>
                    </div>

                    <div class="media-body">
                        <h6>Images number since the site started<a href="#">{{$images->count()}}</a></h6>
                        <div class="text-muted">Dec 18, 18:36</div>
                    </div>


                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-image3"></i></a>
                    </div>

                    <div class="media-body">
                        <h6> Back Ground Images number since the site started <a href="#">{{$back_ground->count()}}</a></h6>
                        <div class="text-muted">Dec 12, 05:46</div>
                    </div>


                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-menu6"></i></a>
                    </div>

                    <div class="media-body">
                        <h6>Service Type number since the site started<a href="#">{{$service_type->count()}}</a></h6>
                        <div class="text-muted">36 minutes ago</div>
                    </div>


                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-help"></i></a>
                    </div>

                    <div class="media-body">
                        <h6> Service Item number since the site started<a href="#">{{$service_item->count()}}</a></h6>
                        <div class="text-muted">4 minutes ago</div>
                    </div>


                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-mail5"></i></a>
                    </div>

                    <div class="media-body">
                        <h6>Message number since the site started <a href="#"></a></h6>
                        <div class="text-muted">Dec 12, 05:46</div>
                    </div>


                </li>
            </ul>
        </div>
    </div>
    <!-- /daily financials -->






@endsection
