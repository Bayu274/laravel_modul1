<?php

use Database\Seeders\CarSeeder;
use Database\Seeders\CategorySeeder;

beforeEach(function () {
    $this->seed(CategorySeeder::class);
    $this->seed(CarSeeder::class);
});

test('semua model dapat diakses melalui route detail', function () {
    foreach (['e3', 'e5', 'gt', 'x'] as $slug) {
        $this->get(route('cars.show', $slug))
            ->assertStatus(200);
    }
});

test('halaman detail model menampilkan nama dan spesifikasi', function () {
    $this->get(route('cars.show', 'e5'))
        ->assertSee('NOVARA e5')
        ->assertSee('Sedan Performa')
        ->assertSee('Spesifikasi')
        ->assertSee('408 hp')
        ->assertSee('Rp 899 Juta');
});

test('halaman detail model menampilkan fitur unggulan', function () {
    $this->get(route('cars.show', 'gt'))
        ->assertSee('Fitur Unggulan')
        ->assertSee('Track')
        ->assertSee('Bang & Olufsen');
});

test('halaman detail model menampilkan navigasi model lainnya', function () {
    $this->get(route('cars.show', 'e3'))
        ->assertSee('Jelajahi Model Lainnya');
});

test('halaman detail model mengembalikan 404 untuk slug tidak valid', function () {
    $this->get(route('cars.show', 'tidak-ada'))
        ->assertStatus(404);
});

test('semua halaman detail memiliki link kembali ke katalog', function () {
    foreach (['e3', 'e5', 'gt', 'x'] as $slug) {
        $this->get(route('cars.show', $slug))
            ->assertSee('Semua Model')
            ->assertSee('Kembali ke Katalog');
    }
});

test('halaman katalog menampilkan semua mobil dengan pagination', function () {
    $this->get(route('cars.index'))
        ->assertStatus(200)
        ->assertSee('Katalog Mobil')
        ->assertSee('NOVARA e3');
});
