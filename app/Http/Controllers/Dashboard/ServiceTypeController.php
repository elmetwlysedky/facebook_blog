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
        $service_type = ServiceType::latest()->get();
        return view('Dashboard.ServiceType.index',compact('service_type'));
    }


    public function create()
    {
        return view('Dashboard.ServiceType.create');
    }


    public function store(ServiceTypeRequest $request)
    {
        $data = $request->validated();

        ServiceType::create($data);
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
        $service_type=ServiceType::findOrFail($id);
        $service_type->delete();
        return redirect()->back();
    }
}
