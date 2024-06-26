<?php

namespace App\Http\Controllers;

use App\Models\PricePackageItem;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricePackageItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.package-items', [
            'items' => PricePackageItem::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packageNames = DB::table('pricings')->select('package_name', 'id')->get();
        return view('dashboard.pages.create.create-package-items', [
            'packages' => $packageNames,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formfields = request()->validate([
            'package_id' => 'numeric',
            'item_name' => 'required',
            'item_availability' => 'boolean',
        ]);

        PricePackageItem::create($formfields);
        return redirect('/dashboard/pricing')->with('message', 'Package item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(PricePackageItem $pricePackageItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricePackageItem $pricePackageItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PricePackageItem $pricePackageItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricePackageItem $pricePackageItem)
    {
        //
    }
}
