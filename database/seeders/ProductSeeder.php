<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Alface',
            'price' => 5.5,
            'description' => 'Você come alface? Pois deveria.',
            'image' => 'https://images.unsplash.com/photo-1604335310236-0ca3d4e4afcc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80',
        ]);
        Product::create([
            'name' => 'Cenoura',
            'price' => 7.9,
            'description' => 'Você já viu coelho de óculos? Pois é.',
            'image' => 'https://images.unsplash.com/photo-1598170845058-32b9d6a5da37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80',
        ]);
        Product::create([
            'name' => 'Banana',
            'price' => 4.9,
            'description' => 'Com banans e bolos se enganam os tolos.',
            'image' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80',
        ]);
    }
}
