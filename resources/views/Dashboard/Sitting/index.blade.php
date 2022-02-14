

@extends('Dashboard.layouts.app')

@section('title')
    Sitting
@endsection





@section('content')



    <!-- Content area -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Sittings Table</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>



        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>key</th>
                <th>value</th>
                <th>type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <div>
                @foreach ($sitting as $item )
                    <tr>

                        <td>{{$item->key}}</td>
                        <td>{{Str::limit($item->value, 100, ' ....')}}</td>
                        <td>{{$item->type}}</td>

                        <td>

                                    <a href="{{route('Sitting.edit',$item->id)}}"><i class="icon-pencil7"></i> Edit </a>

                        </td>
                    </tr>
            @endforeach
            </div>
            </tbody>
        </table>

        <!-- /media library -->


        <!-- /content area -->


@endsection





