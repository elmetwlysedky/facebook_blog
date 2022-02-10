@extends('Site.layouts.app')

@section('title')
    Category
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
                <form>
                    <input type="text" placeholder="{{__('front.company')}}">
                    <input type="text" placeholder="{{__('front.activity')}}">
                    <input type="tel" placeholder="{{__('front.phone')}}">
                    <input type="email" placeholder=" {{__('front.email')}}">


                    <label>{{__('front.type_service')}} </label>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أجهزة إلكترونية</span>
                                    </label>


                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" placeholder="عدد الصور">



                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>توثيق مناسبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" placeholder="عدد الصور">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">



                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" placeholder="عدد الصور">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>




                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>


                    <label>{{__('front.attach')}}</label>
                    <input type="file" placeholder="{{__('front.attach')}}">
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="{{__('front.send')}}"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">{{__('front.contact_details')}}</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> Info@pmstu.com</p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
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
