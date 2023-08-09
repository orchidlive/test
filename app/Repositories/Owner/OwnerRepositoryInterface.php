<?php

namespace App\Repositories\Owner;

interface OwnerRepositoryInterface
{
    public function getAll();
    public function getById($ownerId);
    public function delete($ownerId);
    public function create(array $ownerDetails);
    public function update($ownerId, array $ownerDetails);
}
