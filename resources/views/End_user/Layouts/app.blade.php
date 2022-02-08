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
                    <li class="active"><a href="index.html">الرئيسية</a></li>
                    <li><a href="about.html">من نحن</a></li>
                    <li><a href="services.html">خدماتنا</a></li>
                </ul>

                <a href="index.html" class="navbar-brand hidden-xs text-center"><img src="/End_user/images/logo.png" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="{{route('endUser.category')}}">معرض الصور</a></li>
                    <li><a href="contact.html">اتصل بنا</a></li>
                    <li><a href="#">English</a></li>
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

        <p>جميع الحقوق محفوظة لمؤسسة صانع الصورة للتجارة  &copy; 2005-2015 </p>

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
</body>
</html>
