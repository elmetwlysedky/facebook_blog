@extends('Site.layouts.app')

@section('title')
    Contact
@endsection

@section('style')

    <style>
        input[type="file"] {
            padding: 0;
        }

        .black-box.margin-bottom {
            margin: 0 0 15px;
        }

        .checkbox-holder {
            font-weight: 100;
            position: relative;
            cursor: pointer;
            margin-bottom: 10px;
            display: block;
        }

        .checkbox-holder span {
            vertical-align: middle;
        }

        .checkbox-holder .checkbox-icon {
            width: 13px;
            height: 13px;
            line-height: 7px;
            display: inline-block;
            border: 1px solid #000;
            background: #000;
            text-align: center;
            margin: 0 4px;
        }

        .checkbox-holder input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-holder .checkbox-icon:after {
            content: '';
            background: #000;
            width: 7px;
            height: 7px;
            display: block;
            margin: 2px;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
            border-color: #00bcd4;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
            background: #00bcd4;
        }

        .main-label {
            border-bottom: 1px dashed #00bcd4;
        }

        .check-open {
            margin-top: 10px;
        }
    </style>
@endsection

@section('content')



<div class="fixed-bg">
    <img src="/End_user/images/1.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">{{__('front.contact_us')}}</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                    @csrf


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    <input type="text" name="name" placeholder="{{__('front.company')}}">
                    <input type="text" name="work_type" placeholder="{{__('front.activity')}}">
                    <input type="tel" name="phone" placeholder="{{__('front.phone')}}">
                    <input type="email" name="email" placeholder=" {{__('front.email')}}">


                    <label>{{__('front.type_service')}} </label>

                    <div class="row">
                        @foreach($service_type as $type)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="radio" name="service_type_id" value="{{$type->id}}">
                                        <span class="checkbox-icon"></span>
                                        <span>{{$type->name_en}}</span>
                                    </label>
                                </div>


                                <div class="check-open">
                                    @foreach($type-> service_item as $item)
                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="items[]" value="{{$item->name_en}}">
                                        <span class="checkbox-icon"></span>
                                        <span>{{ $item->name_en}}</span>
                                    </label>


                                        @if($item ->type == "string")

                                    <label>{{$item->name_en}}</label>
                                    <input type="number" name="value" placeholder="">

                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>


                    <label>{{__('front.attach')}}</label>
                    <input type="file" name="file" placeholder="{{__('front.attach')}}">
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="{{__('front.send')}}"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">{{__('front.contact_details')}}</h3>
            @foreach($sitting as $item)
                @if($item ->key == 'email')
                    <p><i class="fa fa-envelope-o right-fa"></i> {{$item->value}}</p>
                @endif
                @if($item -> key == 'phone')
                    <p><i class="fa fa-phone right-fa"></i> {{$item -> value}}</p>
                @endif
            @endforeach
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">{{__('front.subscribe')}} </h3>

                    <form>
                        <input type="email" placeholder="بريدك الالكتروني">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="{{__('front.subscribe')}}"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
    <script>
    $(document).ready(function (){
    $('.check-open').slideUp(0);

    $('.main-label .checkbox-holder').click(function (){
    if($(this).find('input').is(':checked')) {
    $(this).parents('.main-label').next('.check-open').stop().slideDown();
    } else {
    $(this).parents('.main-label').next('.check-open').stop().slideUp();
    }
    });
    });
    </script>
    <script src="/End_user/js/script.js"></script>
@endsection
