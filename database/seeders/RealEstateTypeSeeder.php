<?php

namespace Database\Seeders;

use App\Models\RealEstateType;
use Illuminate\Database\Seeder;

class RealEstateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Wohnung', 'Haus', 'Grundstück', 'Neubauprojekt', 'Investment / Wohn- und Geschäftshäuser', 'Ladenfläche', 'Buröfläche', 'Industrie/Lagerhallen/Produktion', 'Hotel'];

        foreach ($types as $type) {
            RealEstateType::create([
                'name' => $type,
            ]);
        }
    }
}
