<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceItemRequest;
use App\Models\ServiceItem;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceItemController extends Controller
{
    public function index()
    {
        $service_item = ServiceItem::latest()->get();
        return view('Dashboard.ServiceItem.index',compact('service_item'));
    }


    public function create()
    {
        $service_type = ServiceType::pluck('name_en','id');
        return view('Dashboard.ServiceItem.create',compact('service_type'));
    }


    public function store(ServiceItemRequest $request)
    {
        $data = $request->validated();

        ServiceItem::create($data);
        return redirect()->route('ServiceItem.index');
    }

    public function show($id)
    {
        $service_item =ServiceItem::findOrFail($id);
        return view('Dashboard.ServiceItem.show', compact('service_item'));
    }


    public function edit($id)
    {
        $service_type = ServiceType::pluck('name_en','id');
        $service_item =ServiceItem::findOrFail($id);
        return view('Dashboard.ServiceItem.edit', compact('service_item','service_type'));
    }


    public function update(ServiceItemRequest $request, $id)
    {
        $service_item = ServiceItem::findOrFail($id);
        $data = $request->validated();

        $service_item ->update($data);
        return redirect()->route('ServiceItem.index');
    }


    public function destroy($id)
    {
        $service_item=ServiceItem::findOrFail($id);
        $service_item->delete();
        return redirect()->back();
    }
}
