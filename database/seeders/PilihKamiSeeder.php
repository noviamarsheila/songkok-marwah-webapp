<?php

namespace Database\Seeders;

use App\Models\PilihKami;
use Illuminate\Database\Seeder;

class PilihKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PilihKami::create([
            'deskripsi' => 'Mengutamakan kualitas dan bahan serta harga yang kompetitif.'
        ]);

        PilihKami::create([
            'deskripsi' => 'Pengiriman tepat waktu dan dapat dipilih sesuai kebutuhan.'
        ]);
        PilihKami::create([
            'deskripsi' => 'Memiliki tempat produksi, gudang dan armada sendiri.'
        ]);
        PilihKami::create([
            'deskripsi' => 'Model yang Inovatif dan kreatif.'
        ]);
        PilihKami::create([
            'deskripsi' => 'Memberikan Edukasi dan spesifikasi teknis yang tepat.'
        ]);
        PilihKami::create([
            'deskripsi' => 'Berkontribusi dalam membangun lapangan kerja warga sekitar dan menjaga lingkungan.'
        ]);
    }
}
