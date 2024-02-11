<?php

namespace Database\Seeders;

use App\Models\AboutCompany;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Layanan;
use App\Models\PilihKami;
use App\Models\Product;
use App\Models\Sosmed;
use App\Models\Team;
use App\Models\User;
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
        // User
        User::create([
            'name' => 'Novia Marsheila Louisyana',
            'username' => 'noviamarsheila',
            'email' => 'sheila@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        // Category
        Category::create([
            'name' => 'Songkok',
            'slug' => 'songkok',
        ]);

        Category::create([
            'name' => 'Sarung',
            'slug' => 'sarung',
        ]);

        // Produk
        Product::create([
            'name' => 'Songkok Marwah NU',
            'deskripsi' => 'Songkok adalah sebuah penutup kepala tradisional yang sering dikenakan oleh pria muslim di berbagai negara di Asia Tenggara, khususnya di Indonesia, Malaysia, dan Brunei. Songkok memiliki bentuk yang menyerupai topi dengan ciri khas berbentuk setengah bulan, biasanya terbuat dari bahan seperti kulit, kain, atau serat alami lainnya. Songkok sering kali dipakai sebagai bagian dari pakaian resmi dalam berbagai kesempatan, termasuk acara keagamaan, pernikahan, dan upacara adat, serta sebagai bagian dari pakaian sehari-hari dalam beberapa budaya. Selain menjadi simbol identitas keagamaan dan kebangsaan, songkok juga memiliki nilai historis dan budaya yang dalam di masyarakat setempat.',
            'slug' => 'songkok-marwah-nu',
            'image' => 'songkok-uye.png',
            'category_id' => '1'
        ]);

        Product::create([
            'name' => 'Songkok Marwah Premium',
            'deskripsi' => 'Songkok juga memiliki makna simbolis yang mendalam dalam budaya Islam. Penggunaannya sering kali dianggap sebagai bentuk penghormatan terhadap agama dan tradisi Islam. Selain itu, songkok juga dipercaya memiliki nilai spiritual dan perlindungan bagi pemakainya. Di beberapa masyarakat, pemakaian songkok juga menjadi tanda kedewasaan atau kematangan dalam beragama dan sosial. Dengan nilai-nilai simbolisnya yang kuat dan berbagai makna historis dan budaya yang terkait dengannya, songkok tetap menjadi salah satu item penting dalam warisan budaya dan tradisi masyarakat Muslim di Asia Tenggara.
            ',
            'slug' => 'songkok-marwah-premium',
            'image' => 'songkok-marwah-premium.png',
            'category_id' => '1'
        ]);

        // About
        AboutCompany::create([
            'name' => 'PT. INTI MARWAH INDUSTRI',
            'deskripsi' => 'PT. INTI MARWAH INDUSTRI adalah perusahaan UMKM yang bergerak di bidang industri Songkok dengan merk terdaftar Marwah',
            'alamat' => 'Jl. Merpati No. 87 Kabupaten Lamongan',
            'workshop' => 'Perum Graha Indah ruko b7 Tambakboyo lamongan',
            'no_hp' => '08125259979',
            'web' => 'www.songkokmarwah.com',
            'email' => 'info@songkokmarwah.com',
            'link_map' => 'https://www.google.com/search?kgmid=/g/11vpy0p5qm&hl=en-ID&q=Songkok+MarwaH&kgs=883eaca2e8d35158&shndl=17&shem=losc&source=sh/x/kp/osrp/m5/1'
        ]);

        // Layanan
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

        // Pilih Kami
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

        // Faq
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

        // Team
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

        // Sosmed
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
