<?php

namespace Database\Seeders;

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
        $product = new \App\Models\Product([
            'name' => 'Soap',
            'detail' => 'Soap details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Oil',
            'detail' => 'Oil details'
        ]);
        $product->save();

        $item = new \App\Models\Product([
            'name' => 'Pot',
            'detail' => 'Pot detail'
        ]);
        $item->save();
    }
}
