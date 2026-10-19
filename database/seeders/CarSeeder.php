<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Specification;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $carsData = $this->getCarData();

        foreach ($carsData as $slug => $data) {
            $car = Car::create([
                'name' => $data['name'],
                'slug' => $slug,
                'tagline' => $data['tagline'],
                'subtitle' => $data['subtitle'],
                'description' => $data['description'],
                'price' => $data['price'],
                'price_numeric' => $data['price_numeric'],
                'image' => $data['img'],
                'color' => $data['color'],
                'status' => 'available',
            ]);

            // Attach categories
            $categoryNames = match ($slug) {
                'e3' => ['Hatchback', 'Listrik'],
                'e5' => ['Sedan', 'Performa', 'Listrik'],
                'gt' => ['Grand Tourer', 'Performa', 'Listrik'],
                'x' => ['SUV', 'Keluarga', 'Listrik'],
            };

            foreach ($categoryNames as $catName) {
                $category = Category::where('name', $catName)->first();
                if ($category) {
                    $car->categories()->attach($category);
                }
            }

            // Create specifications
            $order = 0;
            foreach ($data['specs'] as $category => $items) {
                foreach ($items as $item) {
                    Specification::create([
                        'car_id' => $car->id,
                        'category' => $category,
                        'label' => $item['label'],
                        'value' => $item['value'],
                        'order_column' => ++$order,
                    ]);
                }
            }

            // Create features
            $order = 0;
            foreach ($data['features'] as $featureDesc) {
                Feature::create([
                    'car_id' => $car->id,
                    'description' => $featureDesc,
                    'order_column' => ++$order,
                ]);
            }
        }
    }

    private function getCarData(): array
    {
        return [
            'e3' => [
                'name' => 'NOVARA e3',
                'tagline' => 'Hatchback kota, jangkauan 350 km.',
                'subtitle' => 'Hatchback Listrik',
                'description' => 'NOVARA e3 dirancang untuk mobilitas perkotaan tanpa kompromi. Ringkas, lincah, dan efisien — e3 membuktikan bahwa mobil listrik bisa jadi pilihan utama untuk penggunaan sehari-hari. Dengan baterai 52 kWh dan satu motor listrik, e3 menawarkan jangkauan hingga 350 km dalam satu pengisian penuh.',
                'price' => 'Mulai Rp 649 Juta',
                'price_numeric' => 649000000,
                'img' => 'images/m3.jpg',
                'color' => '#1c69d4',
                'specs' => [
                    'Performa' => [
                        ['label' => 'Motor', 'value' => 'Listrik Synchronous Reluctance'],
                        ['label' => 'Daya Maksimum', 'value' => '204 hp (150 kW)'],
                        ['label' => 'Torsi Maksimum', 'value' => '310 Nm'],
                        ['label' => '0–100 km/j', 'value' => '7,2 detik'],
                        ['label' => 'Kecepatan Maksimum', 'value' => '160 km/j'],
                    ],
                    'Baterai & Pengisian' => [
                        ['label' => 'Kapasitas Baterai', 'value' => '52 kWh (LFP)'],
                        ['label' => 'Jangkauan WLTP', 'value' => '350 km'],
                        ['label' => 'Pengisian DC Cepat', 'value' => '10–80% dalam 28 menit'],
                        ['label' => 'Daya Pengisian DC Maks', 'value' => '80 kW'],
                        ['label' => 'Pengisian AC', 'value' => '11 kW (0–100% dalam 5 jam)'],
                    ],
                    'Dimensi & Kapasitas' => [
                        ['label' => 'Panjang × Lebar × Tinggi', 'value' => '4.060 × 1.765 × 1.540 mm'],
                        ['label' => 'Wheelbase', 'value' => '2.600 mm'],
                        ['label' => 'Kapasitas Bagasi', 'value' => '385 liter'],
                        ['label' => 'Kapasitas Penumpang', 'value' => '5 orang'],
                    ],
                ],
                'features' => [
                    'Layar sentuh 10,25 inci dengan navigasi cloud',
                    'Apple CarPlay & Android Auto nirkabel',
                    'Kamera parkir 360° dengan pandangan atas',
                    'ADAS: Lane Keep Assist, Adaptive Cruise Control',
                    'Pemanas kursi depan & setir',
                    'Pengisian nirkabel untuk smartphone',
                ],
            ],

            'e5' => [
                'name' => 'NOVARA e5',
                'tagline' => 'Sedan performa, dua motor listrik.',
                'subtitle' => 'Sedan Performa',
                'description' => 'NOVARA e5 adalah sedan performa listrik yang dirancang dari nol untuk kecepatan dan kenyamanan. Dengan dua motor listrik — satu di depan dan satu di belakang — e5 menghadirkan akselerasi instan dan pengendalian presisi. Baterai 77 kWh memberikan jangkauan hingga 520 km, cukup untuk perjalanan antar kota tanpa kecemasan.',
                'price' => 'Mulai Rp 899 Juta',
                'price_numeric' => 899000000,
                'img' => 'images/m5.jpg',
                'color' => '#2f7be0',
                'specs' => [
                    'Performa' => [
                        ['label' => 'Motor', 'value' => 'Dual Motor AWD (Front + Rear)'],
                        ['label' => 'Daya Maksimum', 'value' => '408 hp (300 kW)'],
                        ['label' => 'Torsi Maksimum', 'value' => '570 Nm'],
                        ['label' => '0–100 km/j', 'value' => '4,2 detik'],
                        ['label' => 'Kecepatan Maksimum', 'value' => '200 km/j'],
                    ],
                    'Baterai & Pengisian' => [
                        ['label' => 'Kapasitas Baterai', 'value' => '77 kWh (NMC 811)'],
                        ['label' => 'Jangkauan WLTP', 'value' => '520 km'],
                        ['label' => 'Pengisian DC Cepat', 'value' => '10–80% dalam 22 menit'],
                        ['label' => 'Daya Pengisian DC Maks', 'value' => '250 kW'],
                        ['label' => 'Pengisian AC', 'value' => '22 kW (0–100% dalam 4 jam)'],
                    ],
                    'Dimensi & Kapasitas' => [
                        ['label' => 'Panjang × Lebar × Tinggi', 'value' => '4.720 × 1.840 × 1.440 mm'],
                        ['label' => 'Wheelbase', 'value' => '2.870 mm'],
                        ['label' => 'Kapasitas Bagasi', 'value' => '520 liter'],
                        ['label' => 'Kapasitas Penumpang', 'value' => '5 orang'],
                    ],
                ],
                'features' => [
                    'Layar sentuh panoramik 14,9 inci dengan HUD',
                    'Sound system premium 16 speaker',
                    'Kursi depan ventilasi & pemanas',
                    'Sunroof panoramik kaca elektrokromik',
                    'ADAS Level 2+: Highway Pilot',
                    'Remote climate control via aplikasi',
                    'Suspensi adaptif dengan 3 mode',
                ],
            ],

            'gt' => [
                'name' => 'NOVARA GT',
                'tagline' => 'Grand tourer, 0–100 km/j 3,4 detik.',
                'subtitle' => 'Grand Tourer',
                'description' => 'NOVARA GT adalah grand tourer listrik yang menggabungkan performa supercar dengan kenyamanan perjalanan jarak jauh. Tiga motor listrik menghasilkan tenaga luar biasa, sementara baterai 90 kWh memberikan jangkauan hingga 480 km. Dirancang untuk mereka yang menghargai seni berkendara sekaligus presisi teknologi.',
                'price' => 'Mulai Rp 1,45 Miliar',
                'price_numeric' => 1450000000,
                'img' => 'images/gtr2.jpg',
                'color' => '#0066b1',
                'specs' => [
                    'Performa' => [
                        ['label' => 'Motor', 'value' => 'Tri-Motor AWD (1 Front + 2 Rear)'],
                        ['label' => 'Daya Maksimum', 'value' => '646 hp (482 kW)'],
                        ['label' => 'Torsi Maksimum', 'value' => '920 Nm'],
                        ['label' => '0–100 km/j', 'value' => '3,4 detik'],
                        ['label' => 'Kecepatan Maksimum', 'value' => '250 km/j (dibatasi)'],
                    ],
                    'Baterai & Pengisian' => [
                        ['label' => 'Kapasitas Baterai', 'value' => '90 kWh (NMC 811)'],
                        ['label' => 'Jangkauan WLTP', 'value' => '480 km'],
                        ['label' => 'Pengisian DC Cepat', 'value' => '10–80% dalam 18 menit'],
                        ['label' => 'Daya Pengisian DC Maks', 'value' => '350 kW'],
                        ['label' => 'Pengisian AC', 'value' => '22 kW (0–100% dalam 4,5 jam)'],
                    ],
                    'Dimensi & Kapasitas' => [
                        ['label' => 'Panjang × Lebar × Tinggi', 'value' => '4.980 × 1.920 × 1.380 mm'],
                        ['label' => 'Wheelbase', 'value' => '3.010 mm'],
                        ['label' => 'Kapasitas Bagasi', 'value' => '480 liter'],
                        ['label' => 'Kapasitas Penumpang', 'value' => '4 orang'],
                    ],
                ],
                'features' => [
                    'Layar sentuh 16 inci dengan mode Track',
                    'Sound system Bang & Olufsen 20 speaker',
                    'Kursi sport bucket dengan ventilasi aktif',
                    'Carbon fiber body panel & diffuser aktif',
                    'Torque vectoring via triple motor control',
                    'Mode drift dengan distribusi tenaga belakang',
                    'Headlight laser matrix 800 meter visibility',
                    'Adaptive air suspension dengan mode sport',
                ],
            ],

            'x' => [
                'name' => 'NOVARA X',
                'tagline' => 'SUV listrik, kabin 7 penumpang.',
                'subtitle' => 'SUV Listrik',
                'description' => 'NOVARA X adalah SUV listrik tujuh penumpang yang dirancang untuk keluarga modern. Dengan baterai besar 85 kWh dan motor ganda, X menawarkan jangkauan hingga 480 km — cukup untuk perjalanan panjang tanpa berhenti. Kabin lapang, bagasi besar, dan fitur keselamatan lengkap menjadikan X pilihan sempurna untuk petualangan keluarga.',
                'price' => 'Mulai Rp 1,05 Miliar',
                'price_numeric' => 1050000000,
                'img' => 'images/suv.jpg',
                'color' => '#e22718',
                'specs' => [
                    'Performa' => [
                        ['label' => 'Motor', 'value' => 'Dual Motor AWD (Front + Rear)'],
                        ['label' => 'Daya Maksimum', 'value' => '462 hp (345 kW)'],
                        ['label' => 'Torsi Maksimum', 'value' => '650 Nm'],
                        ['label' => '0–100 km/j', 'value' => '4,8 detik'],
                        ['label' => 'Kecepatan Maksimum', 'value' => '200 km/j'],
                    ],
                    'Baterai & Pengisian' => [
                        ['label' => 'Kapasitas Baterai', 'value' => '85 kWh (NMC 811)'],
                        ['label' => 'Jangkauan WLTP', 'value' => '480 km'],
                        ['label' => 'Pengisian DC Cepat', 'value' => '10–80% dalam 24 menit'],
                        ['label' => 'Daya Pengisian DC Maks', 'value' => '250 kW'],
                        ['label' => 'Pengisian AC', 'value' => '22 kW (0–100% dalam 4 jam)'],
                    ],
                    'Dimensi & Kapasitas' => [
                        ['label' => 'Panjang × Lebar × Tinggi', 'value' => '4.950 × 1.960 × 1.710 mm'],
                        ['label' => 'Wheelbase', 'value' => '2.950 mm'],
                        ['label' => 'Kapasitas Bagasi', 'value' => '620 liter (3-baris dilipat: 1.850 liter)'],
                        ['label' => 'Kapasitas Penumpang', 'value' => '7 orang (3 baris)'],
                    ],
                ],
                'features' => [
                    'Layar sentuh 15,4 inci dengan mode keluarga',
                    'Sound system Harman Kardon 18 speaker',
                    'Kursi baris kedua captain seat dengan ventilasi',
                    'Roof rail & tow bar (kapasitas tarik 2.000 kg)',
                    'Cabin air purification dengan HEPA filter',
                    'ADAS Level 2+: City & Highway Pilot',
                    'Panoramic sunroof ganda',
                    'Charging-to-home: baterai sebagai backup power',
                ],
            ],
        ];
    }
}
