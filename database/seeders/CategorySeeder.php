<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Hatchback', 'description' => 'Mobil kompak berukuran kecil, cocok untuk mobilitas perkotaan.'],
            ['name' => 'Sedan', 'description' => 'Mobil berbadan tiga box dengan kabin tertutup, kenyamanan dan performa tinggi.'],
            ['name' => 'Grand Tourer', 'description' => 'Mobil performa tinggi untuk perjalanan jarak jauh dengan kenyamanan premium.'],
            ['name' => 'SUV', 'description' => 'Sport Utility Vehicle, mobil serbaguna dengan ground clearance tinggi.'],
            ['name' => 'Listrik', 'description' => 'Kendaraan bertenaga listrik murni, zero emission.'],
            ['name' => 'Performa', 'description' => 'Mobil dengan fokus pada performa dan kecepatan tinggi.'],
            ['name' => 'Keluarga', 'description' => 'Mobil dengan kapasitas penumpang besar untuk keluarga.'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
            ]);
        }
    }
}
