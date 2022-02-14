@extends('Site.layouts.app')

@section('title')
    Category
@endsection


@section('content')


    <div class="fixed-bg">
        <img src="/End_user/images/1.jpg">
    </div>


    <div class="main-content">
        <div class="container-fluid">
            <h1 class="main-heading">{{$images->name_en}} </h1>



            <div class="row">
                @foreach($images->photo as $item)

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

@section('js')
{{--    <script type="text/javascript" src="/Site/image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function (){--}}
{{--            /*Button helper. Disable animations, hide close button, change title type and content*/--}}

{{--            $('.fancybox-buttons').fancybox({--}}
{{--                openEffect  : 'none',--}}
{{--                closeEffect : 'none',--}}

{{--                prevEffect : 'none',--}}
{{--                nextEffect : 'none',--}}

{{--                closeBtn  : false,--}}

{{--                helpers : {--}}
{{--                    title : {--}}
{{--                        type : 'inside'--}}
{{--                    },--}}
{{--                    buttons	: {}--}}
{{--                },--}}

{{--                afterLoad : function() {--}}
{{--                    this.title = '<a href="#" class="btn btn-fb btn-small"><i class="fa fa-facebook right-fa"></i> Share</a>' +--}}
{{--                        '<a href="#" class="btn btn-tw btn-small"><i class="fa fa-twitter right-fa"></i> Share</a>' +--}}
{{--                        '<a href="#" class="btn btn-inst btn-small"><i class="fa fa-instagram right-fa"></i> Share</a>';--}}
{{--                }--}}
{{--            });--}}


{{--        });--}}
{{--    </script>--}}
{{--    <script src="/End_user/js/script.js"></script>--}}

@endsection





