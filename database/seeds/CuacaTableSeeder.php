<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CuacaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=100; $i++){
            DB::table('cuaca')->insert([    
                'Tanggal' => $faker->date(),
                'NamaKota' => $faker->word(),
                'KondisiCuaca' => $faker->sentence(2),
                'Suhu' => $faker->randomFloat(2, 0, 100),
                'Kelembaban' => $faker->randomFloat(2, 0, 100),
                'KecepatanAngin' => $faker->randomFloat(2, 0, 999)
            ]);
        }
    }
}
