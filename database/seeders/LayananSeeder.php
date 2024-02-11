<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'name' => 'Creative Idea',
            'deskripsi' => 'Guna memperkaya produk, kami selalu mencoba ide baru yang kreatif dan selalu tetap mengedepankan permintaan pasar yang semakin kompetitif.'
        ]);

        Layanan::create([
            'name' => 'Online Solutions',
            'deskripsi' => 'Kemudahan pelayanan bagi pelanggan, melalui fasilitas online dan informasi produk produk terbaru melalui media website.'
        ]);

        Layanan::create([
            'name' => 'Data',
            'deskripsi' => 'Komputerisasi data terkait stok dan transaksi, tercatat secara langsung, akun tabel serta data yang lebih baik dan akurat.'
        ]);

        Layanan::create([
            'name' => 'Networking Solutions',
            'deskripsi' => 'Membangun sistem pemasaran yang tidak tumpang tindih melalui mekanisme jaringan perwakilan wilayah guna membangun kompetisi bisnis yang sehat.'
        ]);

        Layanan::create([
            'name' => 'Payment',
            'deskripsi' => 'Memberikan kemudahan dalam sistem pembayaran, tunai dan tempo melalui tahap kemitraan.'
        ]);

        Layanan::create([
            'name' => 'After Sales',
            'deskripsi' => 'Membangun komunikasi yang kuat antara manajemen dan mitra atau pelanggan untuk kemajuan bersama.'
        ]);
    }
}
