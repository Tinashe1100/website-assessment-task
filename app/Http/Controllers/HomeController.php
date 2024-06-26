<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.home', [
            'landing' => Home::all(),
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('dashboard.pages.edit.edit-home', [
            'landing' => $home,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $formFields = request()->validate([
            'heading' => 'required',
            'para' => 'required',
            'image' => 'sometimes'
        ]);


        if (request()->hasFile('image')) {
            $formFields['image'] = request()->file('image')->store('publishes', 'public');
        }

        if ($home->update($formFields)) {
            return redirect('dashboard/home-page')->with('message', 'You have successfully update home page');
        } else {
            echo "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
