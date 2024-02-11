<?php

namespace Database\Seeders;

use App\Models\Sosmed;
use Illuminate\Database\Seeder;

class SosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sosmed::create([
            'nama' => 'Instagram',
            'link' => 'https://www.instagram.com/songkok.marwah/'
        ]);
        Sosmed::create([
            'nama' => 'Tiktok',
            'link' => 'https://www.tiktok.com/@songkok.marwah'
        ]);
        Sosmed::create([
            'nama' => 'Facebook',
            'link' => 'https://www.facebook.com/songkokmarwah'
        ]);
    }
}
