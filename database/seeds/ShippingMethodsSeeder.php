<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ShippingMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_methods')->insert([
            'title' => 'Moto',
            'slug' => 'moto',
            'cost' => '13',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('shipping_methods')->insert([
            'title' => 'Coche',
            'slug' => 'coche',
            'cost' => '18',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
