<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $faker = Faker::create();

        //     Product::create([
        //         'name' => $faker->word,
        //     'category' => $faker->word,
        //     'price' => $faker->randomFloat(2, 10, 100),
        //     'quantity' => $faker->numberBetween(1, 100),
        //     'start_date' => $faker->date(),
        //     ]);
        //   \App\Models\Product::factory(2)->create();

        //  \App\Models\Product::factory()->create([
        //     'name' => 'attar',
        //          'category' =>'shoos',
        //          'price' => '55',
        //          'quantity' =>'100',
        //          'start_date' => '2020',
        //  ]);

    }
}
