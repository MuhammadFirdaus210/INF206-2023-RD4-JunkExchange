<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Datas;
use App\Models\Notification;

class DatabaseSeeder extends Seeder
{   
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678'
        ]);

        Datas::factory(9)->create();
        Datas::factory(9)->create([
            'name' => 'Boneka doraemon',
            'category' => 'Boneka',
            'photo' => '/images/bonekadoraemon.jpg'
        ]);
        Datas::factory(9)->create([
            'name' => 'Mainan Robot-robotan',
            'category' => 'Mainan',
            'photo' => '/images/mainan.jpg'
        ]);
        Datas::factory(9)->create([
            'name' => 'Keranjang pakaian',
            'category' => 'Keranjang',
            'photo' => '/images/keranjangpakaian.png'
        ]);
        Datas::factory(9)->create([
            'name' => 'Kotak kardus',
            'category' => 'Kotak',
            'photo' => '/images/kardus.jpg'
        ]);
    }
}
