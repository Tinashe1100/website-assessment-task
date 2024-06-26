<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        return view('dashboard.pages.services', [
            'services' => $service->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.create.create-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $formFields = request()->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        Service::create($formFields);
        return redirect('/services-page')->with('message', 'New service create');
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
        return view('dashboard.pages.edit.edit-services', [
            "service" => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $formFields = request()->validate([
            'name' => 'required',
            'details' => 'required'
        ]);

        $service->update($formFields);
        return back()->with('message', 'You have successfully update service' . $service->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/dashboard/services-page')->with('status', "You have successfully deleted $service->name");
    }
}
