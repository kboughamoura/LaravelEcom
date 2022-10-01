<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert(
            ['name'=>'product1',
            'description'=>'description product 1 ',
            'price'=>'13.5',
            'qte'=>'12',
            'photo'=>'photo',
        ]);
    }
}
