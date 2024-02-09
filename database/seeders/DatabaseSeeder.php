<?php

namespace Database\Seeders;

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
    }
}