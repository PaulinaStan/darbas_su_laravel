<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $orders = [
            [
                'user_id' => 1,
                'shipping_address_id' => 1,
                'billing_address_id' => 1,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'shipping_address_id' => 1,
                'billing_address_id' => 1,
                'status_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'shipping_address_id' => 1,
                'billing_address_id' => 1,
                'status_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'shipping_address_id' => 1,
                'billing_address_id' => 1,
                'status_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 2,
                'shipping_address_id' => 1,
                'billing_address_id' => 1,
                'status_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];


        foreach ($orders as $order) {
            Order::firstOrCreate($order);
        }
    }
}
