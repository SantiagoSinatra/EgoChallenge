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
            'imageLoc' => '/img/autoetios.png',
            'year' => 2019,
            'price' => 815900
        ]);

        DB::table('cars')->insert([
            'model' => 'Yaris',
            'imageLoc' => '/img/yaris.png',
            'year' => 2020,
            'price' => 1038900,
        ]);
        DB::table('cars')->insert([
            'model' => 'Corolla',
            'imageLoc' => '/img/corolla.png',
            'year' => 2018,
            'price' => 1430700,
        ]);

        DB::table('cars')->insert([
            'model' => 'Prius',
            'imageLoc' => '/img/prius.png',
            'year' => 2019,
            'price' => 2882000,
        ]);
        DB::table('cars')->insert([
            'model' => 'Camry',
            'imageLoc' => '/img/camry.png',
            'year' => 2018,
            'price' => 3753200,
        ]);

        DB::table('cars')->insert([
            'model' => 'Toyota 86',
            'imageLoc' => '/img/toyota-86.png',
            'year' => 2019,
            'price' => 3812100,
        ]);
        DB::table('cars')->insert([
            'model' => 'Innova',
            'imageLoc' => '/img/innova.png',
            'year' => 2020,
            'price' => 2596400,
        ]);

        DB::table('cars')->insert([
            'model' => 'SW4',
            'imageLoc' => '/img/sw-4.png',
            'year' => 2019,
            'price' => 3236200,
        ]);

        DB::table('cars')->insert([
            'model' => 'RAV4',
            'imageLoc' => '/img/rav-4.png',
            'year' => 2019,
            'price' => 3170200,
        ]);

        DB::table('cars')->insert([
            'model' => 'Land Cruiser Prado',
            'imageLoc' => '/img/prado-gray-metallic-1-g-3-0-1.png',
            'year' => 2017,
            'price' => 815900,
        ]);

        DB::table('cars')->insert([
            'model' => 'Land Cruiser 200',
            'imageLoc' => '/img/land-cruiser200.png',
            'year' => 2018,
            'price' => 78873100,
        ]);

        DB::table('cars')->insert([
            'model' => 'Hilux',
            'imageLoc' => '/img/hilux.png',
            'year' => 2020,
            'price' => 1507000,
        ]);
    }
}
