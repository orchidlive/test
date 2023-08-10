<?php

namespace App\Repositories\Owner;

interface OwnerRepositoryInterface
{
    public function getAll();
    public function getById(int $ownerId);
    public function delete(int $ownerId): void;
    public function create(array $ownerDetails): void;
    public function update(int $ownerId, array $ownerDetails): void;
}
