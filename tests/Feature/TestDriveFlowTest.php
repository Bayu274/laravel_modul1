<?php

use Database\Seeders\AdminSeeder;
use Database\Seeders\CarSeeder;
use Database\Seeders\CategorySeeder;

beforeEach(function () {
    $this->seed(CategorySeeder::class);
    $this->seed(CarSeeder::class);
    $this->seed(AdminSeeder::class);
});

test('halaman beranda dapat diakses', function () {
    $this->get('/')
        ->assertStatus(200)
        ->assertSee('NOVARA');
});

test('form test drive dapat dikirim dengan data valid', function () {
    $this->from('/test-drive')
        ->post('/test-drive', [
            'nama' => 'Budi',
            'email' => 'budi@test.com',
            'phone' => '081234567890',
            'model' => 'NOVARA e5',
            'preferred_date' => now()->addWeek()->format('Y-m-d'),
        ])
        ->assertRedirect()
        ->assertSessionHas('success');

    $this->assertDatabaseHas('test_drive_requests', [
        'nama' => 'Budi',
        'email' => 'budi@test.com',
        'model' => 'NOVARA e5',
    ]);
});

test('form test drive menolak data tidak valid', function () {
    $this->post('/test-drive', [
        'nama' => '',
        'email' => 'bukan-email',
        'model' => '',
        'preferred_date' => '',
    ])
        ->assertSessionHasErrors(['nama', 'email', 'model', 'preferred_date']);
});

test('halaman login dapat diakses', function () {
    $this->get('/login')
        ->assertStatus(200)
        ->assertSee('Masuk');
});

test('halaman register dapat diakses', function () {
    $this->get('/register')
        ->assertStatus(200)
        ->assertSee('Daftar Akun');
});

test('halaman berita dapat diakses', function () {
    $this->get('/berita')
        ->assertStatus(200)
        ->assertSee('Berita');
});

test('user dapat melakukan register', function () {
    $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
        'phone' => '081234567890',
        'address' => 'Jl. Test No. 1',
        'city' => 'Jakarta',
        'province' => 'DKI Jakarta',
        'postal_code' => '12345',
    ]);

    $this->assertDatabaseHas('users', [
        'email' => 'test@example.com',
        'role' => 'customer',
    ]);
});

test('user dapat melakukan login sebagai admin', function () {
    $this->post('/login', [
        'email' => 'admin@novara.com',
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));
});
