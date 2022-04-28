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
        DB::collection('item_product')->insert(['title' => 'Rujak Cingur', 'description' => 'lorem ipsum bla bla', 'price'=>10000,'stock'=>10]);
    }
}
