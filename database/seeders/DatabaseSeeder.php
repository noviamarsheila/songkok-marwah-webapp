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
            'name' => 'songkok',
            'slug' => 'songkok',
        ]);

        Product::create([
            'name' => 'songkok uye',
            'deskripsi' => 'songkok uye lorem ipsum dolor amet',
            'slug' => 'songkok-uye',
            'image' => 'songkok-uye.png',
            'category_id' => '1'
        ]);
    }
}
