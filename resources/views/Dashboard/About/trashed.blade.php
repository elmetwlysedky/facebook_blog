 @extends('Dashboard.layouts.app')

@section('title')
Trashed About
@endsection




@section('js')

    <script src="/Dashboard/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/datatables_basic.js"></script>
@endsection





@section('content')






<!-- Content area -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Trashed About Table</h5>
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
        <a href="{{route('About.index')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
               home
            </button>
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
                                        <div class="dropdown-divider"></div>
                                        <a href="{{route('About.restore',[$item->id])}}" class="dropdown-item"><i class="icon-rotate-cw2 "></i>Restore </a>


                                        <form action="{{route('About.hardDelete',$item->id)}}" method="POST"  >
                                            @csrf
                                            @method('DELETE')

                                            <button class="dropdown-item" type="submit"><i class="icon-cancel-circle2 "> </i>permanent delete</button>
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




