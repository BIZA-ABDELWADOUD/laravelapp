<?php

namespace Database\Seeders;

use App\Models\Localtype;
use Illuminate\Database\Seeder;

class LocaltypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typelocal = Localtype::create([
                'designation' => 'villa'
        ]);

        $typelocal = Localtype::create([
            'designation' => 'appatement'
        ]);

        $typelocal = Localtype::create([
            'designation' => 'maison'
        ]);

        $typelocal = Localtype::create([
            'designation' => 'hammam'
        ]);
    }
}
