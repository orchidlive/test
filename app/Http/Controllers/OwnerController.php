<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Http\Resources\OwnerResource;
use App\Repositories\Owner\OwnerRepositoryInterface;

class OwnerController extends Controller
{

    public function __construct(
        private readonly OwnerRepositoryInterface $ownerRepository
    ) {}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->ownerRepository->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOwnerRequest $request)
    {
        $this->ownerRepository->create($request->safe()->toArray());
        return redirect('/')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $ownerId)
    {
        return view('owners.show')->with('owner', $this->ownerRepository->getById($ownerId));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $ownerId)
    {
        return view('owners.edit')->with('owner', $this->ownerRepository->getById($ownerId));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOwnerRequest $request, int $ownerId)
    {
        $this->ownerRepository->update($ownerId, $request->safe()->toArray());
        return redirect('/')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $ownerId)
    {
        $this->ownerRepository->delete($ownerId);
        return redirect('/')->with('success', 'User Deleted');
    }
}
