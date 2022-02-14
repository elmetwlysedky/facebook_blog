
@extends('Dashboard.layouts.app')

@section('title')
    Back Grounds
@endsection


@section('content')


<div class="card">
    <div class="card-body">
        <div class="mb-4">
            <div class="mb-3 text-center">
                <a href="#" class="d-inline-block">
                    <img src="/storage/{{$back_ground->image}}" class="img-fluid" alt="" style="height: 300px;">
                </a>
            </div>
            </div>
        </div>
    </div>

<!-- /post -->
@endsection
