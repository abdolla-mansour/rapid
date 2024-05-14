<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        return view('admin.service', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        try{
            $service = new Service();
            $service->name = $request->name;
            $service->slug = $request->name;
            $service->content = $request->content;
            $service->image = $request->image->store('services', 'public');
            $service->save();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        try{
            $service->name = $request->name;
            $service->content = $request->content;
            if($request->hasFile('image')){
                Storage::disk('public')->delete($service->image);
                $service->image = $request->image->store('services', 'public');
            }
            $service->save();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($service_id)
    {
        $service = Service::find($service_id);
        if(!$service){
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
        if($service->image){
            Storage::disk('public')->delete($service->image);
            Storage::delete($service->image);
        }
        $service->delete();
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
