<?php

namespace App\Http\Controllers;

use App\Models\CallToAction;
use Illuminate\Http\Request;

class CallToActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CallToAction $callToAction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallToAction $callToAction)
    {
        return view('dashboard.pages.edit.edit-cta', [
            'cta' => $callToAction,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CallToAction $cta)
    {

        $formFields = request()->validate([
            'heading' => 'required',
            'paragraph' => 'required',
            'cta_button' => 'required',
        ]);

        $cta->update($formFields);

        return redirect('/dashboard')->with('message', 'You have successfully updated the call to action');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CallToAction $callToAction)
    {
        //
    }
}
