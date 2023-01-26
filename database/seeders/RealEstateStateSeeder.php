<?php

namespace Database\Seeders;

use App\Models\RealEstateState;
use Illuminate\Database\Seeder;

class RealEstateStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = ['Neu', 'Reserviert', 'Verkauft', 'Auktion', 'Zwangsversteigerung', 'Archiviert'];

        foreach ($states as $state) {
            RealEstateState::create([
                'name' => $state
            ]);
        }
    }
}
