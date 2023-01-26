<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RealEstateStateSeeder::class);
        $this->call(RealEstateTypeSeeder::class);
        $this->call(RealEstateSeeder::class);
    }
}
