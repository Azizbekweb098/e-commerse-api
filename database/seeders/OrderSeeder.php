<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
        'name' => 'admin'
        ]);
        Order::create([
            'name' => 'clinet',
            ]);

            Order::create([
                'name' => 'show_manager',
                ]);
    }
}
