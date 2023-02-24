<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'name' => 'Adresas',
                'country' => 'Lietuva',
                'city' => 'Vilnius',
                'zip' => 'LT-01234',
                'street' => 'Gedimino pr.',
                'house_number' => '1',
                'apartment_number' => '2',
                'state' => 'Vilniaus raj.',
                'type' => 'gyvenamoji',
                'additional_info' => 'Papildoma informacija apie adresą',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adresas',
                'country' => 'Lietuva',
                'city' => 'Kaunas',
                'zip' => 'LT-56789',
                'street' => 'Laisvės al.',
                'house_number' => '10',
                'apartment_number' => '12',
                'state' => 'Kauno raj.',
                'type' => 'darbinis',
                'additional_info' => 'Papildoma informacija apie adresą',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($addresses as $address) {
            Address::firstOrCreate($address);
        }
    }
}
