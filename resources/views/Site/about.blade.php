
@extends('Site.Layouts.app')

@section('title')
    Category
@endsection


@section('content')
    <div class="fixed-bg">
        <img src="/End_user/images/1.jpg">
    </div>

    <div class="main-content">
        <div class="container">
            <h1 class="main-heading">{{__('front.our_services')}}</h1>

            @foreach($about as $item)
            <div class="border-bottom">
                <h1><strong>{{$item ->name_en}}</strong></h1>
                <p>{{$item->description_en}}</p>

            </div>
            @endforeach
          </div>
    </div>
@endsection




