<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceTypeRequest;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceTypeController extends Controller
{
    public function index()
    {
        return view('Dashboard.ServiceType.index',[
            'service_type'=>ServiceType::latest()->Paginate(3),
        ]);
    }


    public function create()
    {
        return view('Dashboard.ServiceType.create');
    }


    public function store(ServiceTypeRequest $request)
    {
        ServiceType::create($request->validated());
        return redirect()->route('ServiceType.index');
    }

    public function show($id)
    {
        $service_type =ServiceType::findOrFail($id);
        return view('Dashboard.ServiceType.show', compact('service_type'));
    }


    public function edit($id)
    {
        $service_type =ServiceType::findOrFail($id);
        return view('Dashboard.ServiceType.edit', compact('service_type'));
    }


    public function update(ServiceTypeRequest $request, $id)
    {
        $service_type = ServiceType::findOrFail($id);
        $data = $request->validated();

        $service_type ->update($data);
        return redirect()->route('ServiceType.index');
    }


    public function destroy($id)
    {
        $service_type=ServiceType::destroy($id);
        return redirect()->back();
    }
    public function trashed()
    {
        $service_type =ServiceType::onlyTrashed()->latest()->Paginate(3);

        return view('Dashboard.ServiceType.trashed',compact('service_type'));
    }

    public function hardDelete( $id)
    {
        $service_type =ServiceType:: withTrashed()->where('id',$id)->first() ;
        $service_type->forceDelete();
        return redirect()->back();

    }

    public function restore( $id)
    {
        $service_type =ServiceType:: withTrashed()->where('id',$id)->first() ;
        $service_type->restore();
        return redirect()->route('ServiceType.index');
    }

}
