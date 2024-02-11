<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Nurul Huda',
            'wilayah' => 'Pusat',
            'no_hp' => '082330336007'
        ]);
        Team::create([
            'name' => 'Dendy SL',
            'wilayah' => 'Jawa Timur',
            'no_hp' => '081231457550'
        ]);
        Team::create([
            'name' => 'Tatak W',
            'wilayah' => 'Jawa Tengah',
            'no_hp' => '085891070356'
        ]);
    }
}
