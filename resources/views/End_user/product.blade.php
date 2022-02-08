@extends('End_user.layouts.app')

@section('title')
    Category
@endsection


@section('content')


    <div class="fixed-bg">
        <img src="/End_user/images/1.jpg">
    </div>


    <div class="main-content">
        <div class="container-fluid">
{{--            <h1 class="main-heading">{{$Products->category->name_en}} </h1>--}}



            <div class="row">
                @foreach($Products -> products as $item)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="">
                        <img src="/storage/{{$item->image}}" alt="img">
                    </a>
                </div>

                @endforeach

            </div>

        </div>
    </div>

@endsection
