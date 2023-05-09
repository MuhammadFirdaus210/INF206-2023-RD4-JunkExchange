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

        Datas::factory(9)->create();
        Datas::factory(9)->create([
            'name' => 'Boneka doraemon',
            'category' => 'Boneka'
        ]);
        Datas::factory(9)->create([
            'name' => 'Mainan Robot-robotan',
            'category' => 'Mainan'
        ]);
        Datas::factory(9)->create([
            'name' => 'Keranjang pakaian',
            'category' => 'Keranjang'
        ]);
        Datas::factory(9)->create([
            'name' => 'Kotak kardus',
            'category' => 'Kotak'
        ]);

        
    }
}
