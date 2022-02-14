@extends('Site.Layouts.app')

@section('title')
    Category
@endsection


@section('content')

    <div class="fixed-bg">
        <img src="/End_user/images/1.jpg">
    </div>

    <div class="main-content">
        <div class="container-fluid">
            <h1 class="main-heading">{{__('front.our_work')}}</h1>


            @foreach($categories as $item)
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                    <a href="{{route('endUser.Images',$item->id)}}" class="img-holder">
                        <img src="/storage/{{$item->image}}" alt="...">

                        <div class="hover-content">
                            <h1>{{$item->name_en}}</h1>
                        </div>
                    </a>
                </div>

                @endforeach



            </div>
            </a>
        </div>
    </div>

    </div>
    </div>


@endsection
