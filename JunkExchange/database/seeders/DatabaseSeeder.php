<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Datas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //Product 1
        Datas::create([
            'name' => 'Vas bunga blue ccurrm',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product1.jpg'
        ]);

        //Product 2
        Datas::create([
            'name' => 'Vas bunga blue occur',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product2.jpg'
        ]);

        //Product 3
        Datas::create([
            'name' => 'Vas bunga musim semi',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product3.jpg'
        ]);

        //Product 4
        Datas::create([
            'name' => 'Vas bunga blue ocean',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product4.jpg'
        ]);

        //Product 5
        Datas::create([
            'name' => 'Vas bunga crimson flame',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product5.jpg'
        ]);

        //Product 6
        Datas::create([
            'name' => 'Vas bunga autumn',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product6.jpg'
        ]);

        //Product 7
        Datas::create([
            'name' => 'Vas bunga red dram',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product7.jpg'
        ]);

        //Product 8
        Datas::create([
            'name' => 'Vas bunga senyum pagi',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product8.jpg'
        ]);
        
        //Product 9
        Datas::create([
            'name' => 'Vas bunga fatman',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => 'images/product9.jpg'
        ]);

    }
}
