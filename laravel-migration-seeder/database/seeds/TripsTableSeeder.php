<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('trip')->insert([
            'departure' => $faker->word(),
            'destination' => $faker->word(),
            'price' => $faker->randomFloat(2, 100, 10000)
        ]);
    }
}
