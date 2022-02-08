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
            <h1 class="main-heading">أعمالنا</h1>


            @foreach($Categories as $Category)
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                    <a href="{{route('endUser.Product',$Category->id)}}" class="img-holder">
                        <img src="/storage/{{$Category->image}}" alt="...">

                        <div class="hover-content">
                            <h1>{{$Category->name_en}}</h1>
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
