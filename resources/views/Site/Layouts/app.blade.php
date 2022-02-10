<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Galary @yield('title')</title>
    <link rel="icon" type="image/png" href="/End_user/images/icon.png">
    <link rel="stylesheet" type="text/css" href="/End_user/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/End_user/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/End_user/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/End_user/css/style.css">
    <link rel="stylesheet" type="text/css" href="/End_user/css/style-en.css">
    @yield('style')
</head>

<body>

<!--===============================
    NAV
===================================-->

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="index.html" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="images/logo.png" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li class="active"><a href="{{route('endUser.home')}}">{{__('front.main')}}</a></li>
                    <li><a href="about.html">{{__('front.who_are_we')}}</a></li>
                    <li><a href="services.html">{{__('front.our_services')}}</a></li>
                </ul>

                <a href="index.html" class="navbar-brand hidden-xs text-center"><img src="/End_user/images/logo.png" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="{{route('endUser.category')}}">{{__('front.gallery')}} </a></li>
                    <li><a href="{{route('endUser.contact')}}">{{__('front.contact_us')}} </a></li>
                    <li>



                                <select class="form-control changeLang">
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>{{__('front.english')}}</option>
                                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>{{__('front.arabic')}}</option>
                                </select>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@yield('content')



<!--===============================
    FOOTER
===================================-->

<footer class="navbar-fixed-bottom text-center">
    <div class="container">

        <p> {{__('front.property_rights')}}&copy; 2005-2015 </p>

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
        <a href="#"><i class="fa fa-vimeo"></i></a>

    </div>
</footer>


<!--===============================
    SCRIPT
===================================-->

<script src="/End_user/js/jquery-1.11.1.min.js"></script>
<script src="/End_user/js/bootstrap.min.js"></script>
<script src="/End_user/owl-carousel/owl.carousel.min.js"></script>
<script src="/End_user/js/script.js"></script>
<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
@yield('js')
</body>
</html>
