<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Galary @yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/Dashboard/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/Dashboard/global_assets/js/main/jquery.min.js"></script>
    <script src="/Dashboard/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/Dashboard/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="/Dashboard/assets/js/app.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_light.png" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				Morning, Victoria!
			</span>

        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Connect
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-body p-2">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-github4 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dropbox text-blue-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dribbble3 text-pink-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-google-drive text-success-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-twitter text-info-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-youtube text-danger icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-pulse2 mr-2"></i>
                    Activity
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                    <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                </div>

                                <div class="media-body">
                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                    <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                    <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                </div>

                                <div class="media-body">
                                    Shipping cost to the Netherlands has been reduced, database updated
                                    <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                </div>

                                <div class="media-body">
                                    New review received on <a href="#">Server side integration</a> services
                                    <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                    <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All activity</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <form class="navbar-nav-link" action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit"><i class="icon-switch2"></i></button>
                    <span class="d-md-none ml-2">Logout</span>
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            <span class="font-weight-semibold">Navigation</span>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user-material">
                <div class="sidebar-user-material-body">
                    <div class="card-body text-center">
                        <a href="#">
{{--                            @isset(auth()->user()->profile->photo)--}}
{{--                            <img src="/storage/{{auth()->user()->profile->photo}}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">--}}
{{--                            @endisset--}}
                        </a>
                        <h6 class="mb-0 text-white text-shadow-dark"></h6>
                        <span class="font-size-sm text-white text-shadow-dark"></span>
                    </div>

                    <div class="sidebar-user-material-footer">
                        <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                    </div>
                </div>

                <div class="collapse" id="user-nav">
                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="icon-user-plus"></i>
                                <span>My profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-coins"></i>
                                <span>My balance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-comment-discussion"></i>
                                <span>Messages</span>
                                <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-cog5"></i>
                                <span>Account settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-switch2"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="{{route('Dashboard.home')}}" class="nav-link active">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
								</span>
                        </a>
                    </li>



                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-grid6 mr-3 "></i><span>Category</span></a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="{{route('Category.index')}}" class="nav-link">List Category</a></li>
                                    <li class="nav-item"><a href="{{route('Category.create')}}" class="nav-link">Create Category</a></li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-images2 mr-3 "></i><span>Images</span></a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="{{route('Images.index')}}" class="nav-link">List images</a></li>
                                    <li class="nav-item"><a href="{{route('Images.create')}}" class="nav-link">Create images</a></li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-menu6 mr-3 icon"></i><span>Service Type</span></a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="{{route('ServiceType.index')}}" class="nav-link">List Service Type</a></li>
                                    <li class="nav-item"><a href="{{route('ServiceType.create')}}" class="nav-link">Create Service Type</a></li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-clipboard5 mr-3"></i><span>Service Item</span></a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="{{route('ServiceItem.index')}}" class="nav-link">List Service Item</a></li>
                                    <li class="nav-item"><a href="{{route('ServiceItem.create')}}" class="nav-link">Create Service Item</a></li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-help mr-3 icon"></i><span>About</span></a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="{{route('About.index')}}" class="nav-link">List About</a></li>
                                    <li class="nav-item"><a href="{{route('About.create')}}" class="nav-link">Create About</a></li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-image3 mr-3 icon"></i><span>Back Ground</span></a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="{{route('BackGround.index')}}" class="nav-link">List Back Ground</a></li>
                                    <li class="nav-item"><a href="{{route('BackGround.create')}}" class="nav-link">Create Back Ground</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="{{route('Sitting.index')}}" class="nav-link"><i class="icon-gear"></i><span>Setting</span></a></li>

                            <li class="nav-item"><a href="" class="nav-link"><i class="icon-mail5 mr-3 icon"></i><span>Message</span></a></li
                     <!-- /main -->


                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">




    <div class="content">
@yield('content')

    </div>
    <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->
    </div>
    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
