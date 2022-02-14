@extends('Dashboard.Layouts.app')

@section('title')
    Edit {{$sitting->key}}
@endsection

@section('js')
    <!-- Theme JS files -->
    <script src="Dashboard/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="Dashboard/assets/js/app.js"></script>
    <script src="Dashboard/global_assets/js/demo_pages/form_inputs.js"></script>
    <!-- /theme JS files -->
@endsection

@section('content')



    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit {{$sitting->key}}</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <p class="mb-4"> <strong></strong> <code></code>  </p>
            <Form action="{{route('Sitting.update',$sitting->id)}}" class="form-validate-jquery" method="post" enctype="multipart/form-data">
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

                <div class="form-group row">
                    <label class="col-form-label col-lg-3">key<span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="key" class="form-control" value="{{$sitting->key}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Value<span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="value" class="form-control" value="{{$sitting->value}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-3">type<span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="type" class="form-control" value="{{$sitting->type}}">
                    </div>
                </div>

                <button type="submit" class="btn bg-teal-400 btn-labeled ">update</button>
            </Form>
        </div>
    </div>




@endsection


