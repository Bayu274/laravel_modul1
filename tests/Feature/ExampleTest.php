<?php

use Database\Seeders\CarSeeder;
use Database\Seeders\CategorySeeder;

test('the application returns a successful response', function () {
    // Seed required data
    $this->seed(CategorySeeder::class);
    $this->seed(CarSeeder::class);

    $response = $this->get('/');
    $response->assertStatus(200);
});
