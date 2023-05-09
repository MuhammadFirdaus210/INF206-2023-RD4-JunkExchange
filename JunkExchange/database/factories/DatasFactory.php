<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datas>
 */
class DatasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {   
        return [
            'name' => 'Vas bunga blue ccurrm',
            'category' => 'Vas Bunga',
            'weight' => '2KG',
            'photo' => '/images/product1.jpg'
        ];
    }
}
