<?php

namespace Database\Seeders;

use App\Models\AboutCompany;
use App\Models\Category;
use App\Models\Product;
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
        User::create([
            'name' => 'Novia Marsheila Louisyana',
            'username' => 'noviamarsheila',
            'email' => 'sheila@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        Category::create([
            'name' => 'Songkok',
            'slug' => 'songkok',
        ]);

        Category::create([
            'name' => 'Sarung',
            'slug' => 'sarung',
        ]);

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
    }
}
