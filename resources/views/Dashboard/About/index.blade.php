@extends('Dashboard.layouts.app')

@section('title')
    About
@endsection






@section('content')



    <!-- Content area -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">About Table</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <code></code><strong> </strong>
            <a href="{{route('About.create')}}">
                <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
                    Create
                </button>
            </a>
            <a href="{{route('About.trashed')}}" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                <i class="icon-calendar5 text-pink-300"></i>
                <span>Trashed</span>
            </a>
        </div>


        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>Name en</th>
                <th>Name ar</th>
                <th>Description en</th>
                <th>Description ar</th>
                <th>Actions</th>
            </tr>
            </thead>
            <div>
                @foreach ($about as $item )
                    <tr>

                        <td>{{$item->name_en}}</td>
                        <td>{{$item->name_ar}}</td>
                        <td>{{Str::limit($item->description_en, 100,'....')}}</td>
                        <td>{{Str::limit($item->description_ar, 100,'....')}}</td>


                        </td>
                        <td>
                            <div class="list-icons">
                                <div class="list-icons-item dropdown">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{route('About.edit',$item->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> Edit </a>
                                        <form action="{{route('About.destroy',$item->id)}}" method="POST"  >
                                            @csrf
                                            @method('DELETE')

                                            <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>move to trash</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
            </div>
            @endforeach

            </tbody>

        </table>

        <!-- /media library -->


        <!-- /content area -->
        <div class="card card-body border-top-1 border-top-pink text-center">
            <ul class="pagination pagination-separated align-self-center">
                {!! $about->links() !!}

            </ul>
        </div>


@endsection





