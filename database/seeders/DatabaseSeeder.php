<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;
use \App\Models\Category;
use \App\Models\Shop;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Shop::factory(3)->create();

        // Category::factory(3)->create();

        Product::factory(20)->create();

        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Shop::create([
            'nama' => 'Ibrahim Aji Fajar Romadhon',
            'nama_toko' => 'ibrahim-aji-fajar',
            'email' => 'ibrahim@gmail.com',
            'password' => bcrypt('Ibrahim1234')
        ]);

        Shop::create([
            'nama' => 'Budi Asoy',
            'nama_toko' => 'budi-asoy',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('Budi1234')
        ]);

        Shop::create([
            'nama' => 'Ahmad Slebew',
            'nama_toko' => 'ahmad-slebew',
            'email' => 'Ahmad@gmail.com',
            'password' => bcrypt('Ahmad1234')
        ]);

        Category::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik',
        ]);

        Category::create([
            'nama' => 'Food',
            'slug' => 'food',
        ]);
        
        Category::create([
            'nama' => 'Fashion',
            'slug' => 'fashion',
        ]);

        // Product::create([
        //     'nama' => 'iPhone 13',
        //     'category_id' => 1,
        //     'shop_id' => 1,
        //     'slug' => 'iphone-13',
        //     'harga' => '13000000',
        //     'deskripsi' => 'Ini adalah hp iPhone 13 terbaru dan paling bagus',
        //     'gambar' => 'https://www.mall.cz/i/63506020/550/550'
        // ]);
        
        // Product::create([
        //     'nama' => 'iPhone 10 Pro',
        //     'category_id' => 2,
        //     'shop_id' => 1,
        //     'slug' => 'iphone-10-pro',
        //     'harga' => '8000000',
        //     'deskripsi' => 'Ini adalah hp iPhone 10 Pro terbaru dan paling bagus',
        //     'gambar' => 'https://www.mall.cz/i/63506020/550/550'
        // ]);
        
        // Product::create([
        //     'nama' => 'iPhone 7',
        //     'category_id' => 1,
        //     'shop_id' => 1,
        //     'slug' => 'iphone-7',
        //     'harga' => '20000000',
        //     'deskripsi' => 'Ini adalah hp iPhone 7 terbaru dan paling bagus',
        //     'gambar' => 'https://www.mall.cz/i/63506020/550/550'
        // ]);

    }
}
