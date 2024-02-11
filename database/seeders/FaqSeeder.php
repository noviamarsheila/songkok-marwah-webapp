<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'heading' => 'headingOne',
            'target' => 'collapseOne',
            'pertanyaan' => 'Apa yang membuat PT Inti Marwah Industri unik dalam produksi songkok?',
            'jawaban' => 'PT Inti Marwah Industri bangga menjadi pionir dalam industri pembuatan songkok. Kami menggabungkan keahlian tradisional dengan teknologi modern untuk menciptakan produk berkualitas tinggi yang memadukan keindahan dan kekuatan.'
        ]);
        Faq::create([
            'heading' => 'headingTwo',
            'target' => 'collapseTwo',
            'pertanyaan' => 'Bagaimana cara memesan songkok dari PT Inti Marwah Industri?',
            'jawaban' => 'Anda dapat memesan songkok kami melalui situs web resmi kami atau menghubungi tim layanan pelanggan kami. Kami juga menyediakan opsi kustomisasi untuk memenuhi kebutuhan spesifik Anda.'
        ]);
        Faq::create([
            'heading' => 'headingThree',
            'target' => 'collapseThree',
            'pertanyaan' => 'Apakah PT Inti Marwah Industri menerima pesanan grosir?',
            'jawaban' => 'Ya, kami menerima pesanan grosir untuk keperluan bisnis, pernikahan, atau acara khusus lainnya. Silakan hubungi tim penjualan kami untuk informasi lebih lanjut dan penawaran khusus.'
        ]);
        Faq::create([
            'heading' => 'headingFour',
            'target' => 'collapseFour',
            'pertanyaan' => 'Bagaimana cara melacak pesanan saya?',
            'jawaban' => 'Setelah pesanan Anda dikonfirmasi, kami akan memberikan nomor pelacakan yang dapat Anda gunakan untuk melacak status pengiriman. Anda juga dapat menghubungi tim layanan pelanggan kami untuk bantuan lebih lanjut.'
        ]);
        Faq::create([
            'heading' => 'headingFive',
            'target' => 'collapseFive',
            'pertanyaan' => 'Apakah PT Inti Marwah Industri juga memproduksi aksesori lain selain songkok?',
            'jawaban' => 'Saat ini, fokus utama kami adalah pada produksi songkok. Namun, kami terbuka untuk pertimbangan kolaborasi atau permintaan khusus. Silakan hubungi kami untuk pembicaraan lebih lanjut.'
        ]);
    }
}
