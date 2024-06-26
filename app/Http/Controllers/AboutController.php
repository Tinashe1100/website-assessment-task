<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.about', [
            'about' => About::all(),
        ]);
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
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('dashboard.pages.edit.edit-about', [
            'about' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $formFields = request()->validate([
            'heading' => 'required',
            'para1' => 'required',
            'para2' => 'required',
            'image' => 'sometimes'
        ]);


        if (request()->hasFile('image')) {
            $formFields['image'] = request()->file('image')->store('publishes', 'public');
        }

        if ($about->update($formFields)) {
            return redirect('/about-page')->with('message', 'You have successfully update home page');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
