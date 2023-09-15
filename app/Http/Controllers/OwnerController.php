<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Http\Resources\OwnerResource;
use App\Models\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OwnerResource::collection(Owner::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOwnerRequest $request)
    {
        Owner::create($request->safe()->toArray());

        return redirect()->to('/')->withSuccess('New Owner Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        $resource = new OwnerResource($owner);

        return view('owners.show')->with('owner', $resource);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner): view
    {
        return view('owners.edit')->with('owner', $owner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        $owner->update($request->safe()->toArray());

        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner): RedirectResponse
    {
        $owner->delete();

        return redirect()->back()->with('status', 'Owner deleted!');
    }
}
