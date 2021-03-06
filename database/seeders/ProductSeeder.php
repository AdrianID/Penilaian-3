<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('item_product')->insert(['id'=>1,'title' => 'Sayur Asem', 'description' => 'sayur asem adalah masakan sejenis sayur yang khas Indonesia. Ada banyak variasi lokal sayur asam seperti sayur asam Jakarta (variasi dari orang Betawi di Jakarta), sayur asam kangkung (variasi yang menggunakan kangkung), dan sayur asam ikan asin.', 'price'=>10000,'stock'=>50]);
        DB::collection('item_product')->insert(['id'=>2,'title' => 'Sayur Bayam', 'description' => 'Bayam merupakan tumbuhan yang biasa ditanam untuk dikonsumsi daunnya sebagai sayuran hijau, dikenal sebagai sayuran dengan sumber zat besi yang penting. Tanaman bayam berasal dari Amerika dan mudah tumbuh tersebar di daerah tropis dan subtropis di seluruh dunia.', 'price'=>15000,'stock'=>55]);
        DB::collection('item_product')->insert(['id'=>3,'title' => 'Sayur Lodeh', 'description' => 'Lodeh Merupakan masakan sayur yang berkuah santan khas Indonesia, terutama di daerah Jawa Tengah dan DI Yogyakarta. Sayur lodeh mempunyai berbagai macam variasi terutama pada bumbunya, ada yang santannya berwarna putih dan ada juga yang santannya berwarna kuning kemerahan.', 'price'=>11000,'stock'=>40]);
        DB::collection('item_product')->insert(['id'=>4,'title' => 'Sayur Kangkung', 'description' => 'Kangkung merupakan salah satu sayuran daun yang paling populer di Asia Tenggara. Kangkung dikenal juga dengan "swamp cabbage", "water convolvulus", dan "water spinach"', 'price'=>22000,'stock'=>42]);
        DB::collection('item_product')->insert(['id'=>5,'title' => 'Sayur SOP', 'description' => 'Sayur sop merupakan salah satu masakan yang kerap menemani waktu makan. Sayur sop terdiri dari beberapa macam sayur seperti wortel, kubis, kol dan tambahan bahan lainnya. Rasanya yang segar dan nikmat membuat sayur sop banyak digemari. Memasak sayur sop juga terbilang mudah', 'price'=>15000,'stock'=>10]);
        
    }
}
