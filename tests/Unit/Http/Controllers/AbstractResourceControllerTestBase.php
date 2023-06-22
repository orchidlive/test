<?php

namespace Tests\Unit\Http\Controllers;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

abstract class AbstractResourceControllerTestBase extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    /**
     * Display a listing of the resource.
     */
    abstract public function test_index();

    /**
     * Show the form for creating a new resource.
     */
    abstract public function test_create();

    /**
     * Store a newly created resource in storage.
     */
    abstract public function test_store();

    /**
     * Display the specified resource.
     */
    abstract public function test_show();

    /**
     * Show the form for editing the specified resource.
     */
    abstract public function test_edit();

    /**
     * Update the specified resource in storage.
     */
    abstract public function test_update();

    /**
     * Remove the specified resource from storage.
     */
    abstract public function test_destroy();
}
