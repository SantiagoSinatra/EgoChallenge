<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'model' => 'Etios',
            'imageName' => 'autoetios',
            'category' => 'car',
            'year' => 2019,
            'price' => 815900
        ]);

        DB::table('cars')->insert([
            'model' => 'Yaris',
            'imageName' => 'yaris',
            'category' => 'car',
            'year' => 2020,
            'price' => 1038900,
        ]);
        DB::table('cars')->insert([
            'model' => 'Corolla',
            'imageName' => 'corolla',
            'category' => 'car',
            'year' => 2018,
            'price' => 1430700,
        ]);

        DB::table('cars')->insert([
            'model' => 'Prius',
            'imageName' => 'prius',
            'category' => 'car',
            'year' => 2019,
            'price' => 2882000,
        ]);
        DB::table('cars')->insert([
            'model' => 'Camry',
            'imageName' => 'camry',
            'category' => 'car',
            'year' => 2018,
            'price' => 3753200,
        ]);

        DB::table('cars')->insert([
            'model' => 'Toyota 86',
            'imageName' => 'toyota-86',
            'category' => 'car',
            'year' => 2019,
            'price' => 3812100,
        ]);
        DB::table('cars')->insert([
            'model' => 'Innova',
            'imageName' => 'innova',
            'category' => 'pickup',
            'year' => 2020,
            'price' => 2596400,
        ]);

        DB::table('cars')->insert([
            'model' => 'SW4',
            'imageName' => 'sw-4',
            'category' => 'suv',
            'year' => 2019,
            'price' => 3236200,
        ]);

        DB::table('cars')->insert([
            'model' => 'RAV4',
            'imageName' => 'rav-4',
            'category' => 'suv',
            'year' => 2019,
            'price' => 3170200,
        ]);

        DB::table('cars')->insert([
            'model' => 'Land Cruiser Prado',
            'imageName' => 'prado-gray-metallic-1-g-3-01',
            'category' => 'suv',
            'year' => 2017,
            'price' => 815900,
        ]);

        DB::table('cars')->insert([
            'model' => 'Land Cruiser 200',
            'imageName' => 'land-cruiser-200',
            'category' => 'suv',
            'year' => 2018,
            'price' => 78873100,
        ]);

        DB::table('cars')->insert([
            'model' => 'Hilux',
            'imageName' => 'hilux',
            'category' => 'pickup',
            'year' => 2020,
            'price' => 1507000,
        ]);
    }
}
