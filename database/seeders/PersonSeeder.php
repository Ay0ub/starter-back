<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // 10 persons seront créés
        // pour chaque person 3 products sernt créés donc au total 30 product
        // donc 30 combinaison person-product seront créé
        // testez pour mieux comprendre
        Person::factory()->count(10)->hasAttached(
            Product::factory()->count(3),
            ['quantity'  => $faker->randomDigit])->create();
    }
}
