<?php

namespace App\Repositories\Owner;


use App\Http\Resources\OwnerResource;
use App\Models\Owner;

class EloquentOwnerRepository implements OwnerRepositoryInterface
{

    public function getAll()
    {
        return OwnerResource::collection(Owner::all());
    }

    public function getById($ownerId)
    {
        $owner = Owner::findOrFail($ownerId);
        return new OwnerResource($owner);
    }

    public function delete($ownerId): void
    {
        $owner = Owner::findOrFail($ownerId);
        $owner->delete();
    }

    public function create(array $ownerDetails): void
    {
        Owner::create($ownerDetails);
    }

    public function update($ownerId, array $ownerDetails): void
    {
        $owner = Owner::findOrFail($ownerId);
        $owner->update($ownerDetails);
    }
}
