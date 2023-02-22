<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
           [
            'name' => 'Statybinė technika',
            'slug' => 'statybine-technika',
            'description' => 'Statybinių įrankių ir įrengimų kategorija',
            'image' => '/img/products/product-2.jpg',
            'category_id' => 3,
            'price' => 1999,
            'status_id' => 1,
        ],

        [
            'name' => 'Vaikų prekės',
            'slug' => 'vaiku-prekes',
            'description' => 'Vaikų prekių ir žaislų kategorija',
            'image' => '/img/products/product-3.jpg',
            'category_id' => 2,
            'price' => 15.99,
            'status_id' => 2,
        ],

        [
            'name' => 'Baldai',
            'slug' => 'baldai',
            'description' => 'Namų ir kanceliarijos baldų kategorija',
            'image' => '/img/products/product-4.jpg',
            'category_id' => 3,
            'price' => 999,
            'status_id' => 3,
        ],
            [
                'name' => 'Kompiuterinė technika',
                'slug' => 'kompiuterine-technika',
                'description' => 'Kompiuterių ir IT įrengimų kategorija',
                'image' => '/img/products/product-5.jpg',
                'category_id' => 4,
                'price' => 19999,
                'status_id' => 4,
            ],
            [
                'name' => 'Auto prekės',
                'slug' => 'auto-prekes',
                'description' => 'Automobilių prekių ir aksesuarų kategorija',
                'image' => '/img/products/product-6.jpg',
                'category_id' => 5,
                'price' => 666,
                'status_id' => 5,
            ],

            [
                'name' => 'Sporto reikmenys',
                'slug' => 'sporto-reikmenys',
                'description' => 'Sporto reikmenų ir įrangos kategorija',
                'image' => '/img/products/product-7.jpg',
                'category_id' => 6,
                'price' => 777,
                'status_id' => 6,
            ],
            [
                'name' => 'Aksesuarai',
                'slug' => 'aksesuarai',
                'description' => 'Asmeniniams aksesuarams ir papuošalams',
                'image' => '/img/products/product-8.jpg',
                'category_id' => 7,
                'price' => 888,
                'status_id' => 7,
            ],

            [
                'name' => 'Namų apyvokos reikmenys',
                'slug' => 'namu-apyvokos-reikmenys',
                'description' => 'Namų apyvokos reikmenų ir priedų kategorija',
                'image' => '/img/products/product-9.jpg',
                'category_id' => 8,
                'price' => 19999,
                'status_id' => 8,
            ],


];
        foreach ($products as $product) {
            Product::firstOrCreate($product);

        }
    }
}
