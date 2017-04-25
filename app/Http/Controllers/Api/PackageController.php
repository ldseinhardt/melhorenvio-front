<?php

namespace App\Http\Controllers\Api;

use App\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $packages = $request->user()->packages()->orderBy('id', 'desc')->simplePaginate(10);

        return response()->json($packages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = Package::create(array_add($request->all(), 'user_id', $request->user()->id));

        return response()->json($package, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Package $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
       $this->authorize('show', $package);

        return response()->json($package);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Package $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $this->authorize('update', $package);

        $package->fill($request->all())->save();

        return response()->json($package);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Package $package
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Package $package)
    {
        $this->authorize('destroy', $package);

        $package->delete();

        return response()->json([], 204);
    }
}
