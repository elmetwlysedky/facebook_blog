@include('Site.layouts.app')

@section('title')
    main
@endsection

<div id="owl-demo" class="owl-carousel owl-theme">

    @foreach($back_ground as $item)
        <div class="item"><img src="/storage/{{$item->image}}" alt="..."></div>

    @endforeach
</div>

