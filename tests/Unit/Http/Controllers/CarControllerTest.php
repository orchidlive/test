<?php

namespace Tests\Unit\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;

class CarControllerTest extends AbstractResourceControllerTestBase
{
    const CAR_COUNT = 5;

    protected Owner $owner;

    protected function setUp(): void
    {
        parent::setUp();

        $this->owner = Owner::factory()
            ->has(Car::factory(self::CAR_COUNT))
            ->create();

    }

    public function test_index()
    {

        $response = $this->get(route('owner.cars.index', [$this->owner->id]))->assertOk();

        $cars = $response->json('data');

        $this->assertCount(self::CAR_COUNT, $cars);

    }

    public function test_create()
    {
        $this->get(route('owner.cars.create', $this->owner))->assertOk();
    }

    public function test_store()
    {
        $testCar = [
            'make' => 'BMW',
            'model' => 'X5',
            'color' => 'Red',
        ];

        $this->assertDatabaseMissing('cars', $testCar);

        $this->assertCount(self::CAR_COUNT, $this->owner->cars);
        $this->post(route('owner.cars.store', [$this->owner->id]), $testCar)->assertOk();
        $this->assertCount(self::CAR_COUNT + 1, $this->owner->refresh()->cars);
        $this->assertDatabaseHas('cars', $testCar);
    }

    public function test_show()
    {
        $car = $this->owner->cars()->first();

        $this->get(route('owner.cars.show', [$this->owner, $car]))->assertOk();
    }

    public function test_edit()
    {
        $car = $this->owner->cars()->first();

        $this->get(route('owner.cars.edit', [$this->owner->id, $car->id]))->assertOk();
    }

    public function test_update()
    {
        $testCar = [
            'make' => 'BMW',
            'model' => 'M3',
            'color' => 'Blue',
        ];

        $car = $this->owner->cars()->first();
        $this->put(route('owner.cars.update', [$this->owner->id, $car->id]), $testCar)->assertOk();

        $car->refresh();

        $this->assertEquals($testCar['make'], $car->make);
        $this->assertEquals($testCar['model'], $car->model);
        $this->assertEquals($testCar['color'], $car->color);
    }

    public function test_destroy()
    {
        $car = $this->owner->cars()->first();

        $this->delete(route('owner.cars.destroy', [$this->owner->id, $car->id]))->assertOk();

        $this->assertNull(Car::find($car->id));
    }
}
