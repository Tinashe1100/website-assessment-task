<?php

namespace App\Http\Controllers;

use App\Models\PricePackageItem;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packageItems = DB::table('price_package_items')->select('item_name', 'item_availability')->get();
        return view('dashboard.pages.pricing', [
            'pricings' => Pricing::all(),
            'package_items' => $packageItems,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.create.create-price-package');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'package_name' => 'required',
            'package_price' => 'required',
            'package_desc' => 'required',
            'package_cta' => 'required'
        ]);

        Pricing::create($data);
        return redirect('/dashboard/pricing')->with('message', 'You have successfully created a new package');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        return view('dashboard.pages.edit.edit-price-package', [
            'package' => $pricing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pricing $pricing)
    {
        $data = request()->validate([
            'package_name' => 'required',
            'package_price' => 'required',
            'package_desc' => 'required',
            'package_cta' => 'required'
        ]);

        $pricing->update($data);
        return redirect('/dashboard/pricing')->with('message', 'You have successfully update the' . $pricing->package_name . 'package');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        //
    }
}
