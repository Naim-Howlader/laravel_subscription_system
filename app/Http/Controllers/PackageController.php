<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::latest()->get();
        return view('admin.package.package',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages = Package::with('features')->latest()->get();
        return response()->json(['data'=>$packages]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'mbps' => 'required',
            'price' => 'required',
        ]);
        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $package = Package::create([
            'title' => $request->title,
            'mbps' => $request->mbps,
            'price' => $request->price,
            'status' => $status,
        ]);
        $package->features()->attach($request->features);
        return response()->json(['data'=>$request->features]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
