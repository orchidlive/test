<?php

namespace App\Providers;

use App\Repositories\Owner\EloquentOwnerRepository;
use App\Repositories\Owner\OwnerRepositoryInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(OwnerRepositoryInterface::class, EloquentOwnerRepository::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [EloquentOwnerRepository::class];
    }
}
