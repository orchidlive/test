<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        if (Owner::all()->isEmpty()) {
            Owner::factory(20)
                ->has(Car::factory(rand(0, 5)))
                ->create();
        }
    }
}
