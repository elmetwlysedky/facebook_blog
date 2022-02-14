
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
            <h1 class="main-heading">{{__('front.who_are_we')}}</h1>

            <div class="text-center div-padding">
                @foreach($sitting as $item)
                @if($item->key == 'من نحن' && $item->type == 'text')

                <p>{{$item -> value}}</p>

                @endif
                @endforeach
{{--                <p>نعمل في صانع الصورة بفرق متخصصة ونسخر كافة الوسائل التقنية الحديثة لتعزيز مكانة عملائنا.</p>--}}
{{--                <p>الإبداع مزيج بين المنطق والخيال ... هكذا نحن </p>--}}

                <a href="http://training.aljazeera.net/mritems/Documents/2016/2/16/e782075b14c84729a88e703e0776f66a_100.pdf" target="_blank" class="btn btn-white margin"><span>{{__('front.pdf_company')}}</span></a>
                <a href="{{route('endUser.category')}}" class="btn btn-white margin"><span>{{__('front.View_our_work')}}</span></a>
            </div>
        </div>
    </div>
@endsection
