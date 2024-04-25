<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class PackageFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.package.feature');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $features = Feature::latest()->get();
        return response()->json(['data'=>$features]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }

        $feature = Feature::create([
            'name' => $request->name,
            'status' => $status,
        ]);
        return response()->json(['data'=>'Feature created successfully']);
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
