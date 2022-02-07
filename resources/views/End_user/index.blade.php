
@extends('End_user.layouts.app')

@section('title')
    home
@endsection

<!--===============================
    SLIDER
===================================-->
@section('content')
<div id="owl-demo" class="owl-carousel owl-theme">

    <div class="item"><img src="/End_user/images/1.jpg" alt="..."></div>
    <div class="item"><img src="/End_user/images/2.jpg" alt="..."></div>
    <div class="item"><img src="/End_user/images/3.jpg" alt="..."></div>

</div>

<div class="hidden">
    <a class="btn owl-btn next"><span class="fa fa-angle-right"></span></a>
    <a class="btn owl-btn prev"><span class="fa fa-angle-left"></span></a>
</div>
@endsection
