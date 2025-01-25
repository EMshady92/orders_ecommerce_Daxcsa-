<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Order::create([
            'name' => 'Adidas Inter Miami CF 24/25 Messi playera de inicio',
            'color' => 'Pink',
            'unit' => 'Peace',
            'contact' => 'Cesar Huerta',
            'phone' => '1234567890',
            'status' => 1,
            'img_url' => 'https://m.media-amazon.com/images/I/41hZDm8uIeL.__AC_SX300_SY300_QL70_ML2_.jpg',
            'envio_type' => 1,
            'total' => 2513.00,
            'currency' => 'usd',
        ]);

        Order::create([
            'name' => '(GS) Nike Dunk High Championship Red 6Y / 7.5W',
            'color' => 'Red',
            'unit' => 'Peace',
            'contact' => 'Cesar Huerta',
            'phone' => '1234567890',
            'status' => 2,
            'img_url' => 'https://m.media-amazon.com/images/I/61WBVVUCeJL._AC_UL320_.jpg',
            'envio_type' => 1,
            'total' => 2513.00,
            'currency' => 'usd',
        ]);

        Order::create([
            'name' => 'Under Armour Tenis de Básquetbol PS Lockdown 6 Unisex',
            'color' => 'Red',
            'unit' => 'Peace',
            'contact' => 'Cesar Huerta',
            'phone' => '1234567890',
            'status' => 3,
            'img_url' => 'https://m.media-amazon.com/images/I/51OXfpRkphL._AC_SY575_.jpg',
            'envio_type' => 1,
            'total' => 5412.00,
            'currency' => 'usd'
        ]);

        Order::create([
            'name' => 'Maison Alhambra Yeah Eau de Parfum Spray for Men, 3.4 Ounce',
            'color' => 'Black',
            'unit' => 'Peace',
            'contact' => 'Daniel Torres',
            'phone' => '1234567890',
            'status' => 4,
            'img_url' => 'https://m.media-amazon.com/images/I/61Jae2B8ZfL._AC_SX522_.jpg',
            'envio_type' => 1,
            'total' => 3254.00,
            'currency' => 'usd'
        ]);

        Order::create([
            'name' => 'Super Smash Bros. Ultimate - Standard Edition - Nintendo Switch',
            'color' => 'White',
            'unit' => 'Peace',
            'contact' => 'Daniel Torres',
            'phone' => '1234567890',
            'status' => 5,
            'img_url' => 'https://m.media-amazon.com/images/I/81qzH0RY3DS.__AC_SX300_SY300_QL70_ML2_.jpg',
            'envio_type' => 1,
            'total' => 2122.00,
            'currency' => 'usd'
        ]);

        Order::create([
            'name' => 'Cordless Electric Drill with 3 Work Modes Screwing/Drilling/Impact, 2 Rechargeable Batteries, 25 + 3 Torque Adjustment',
            'color' => 'Black',
            'unit' => 'Peace',
            'contact' => 'Daniel Torres',
            'phone' => '1234567890',
            'status' => 6,
            'img_url' => 'https://m.media-amazon.com/images/I/61YRmVmbUqL.__AC_SX300_SY300_QL70_ML2_.jpg',
            'envio_type' => 1,
            'total' => 213.00,
            'currency' => 'usd'
        ]);
    }

}
