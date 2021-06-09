<?php

namespace Database\Seeders;

use App\Models\ShippingMethod;
use Illuminate\Database\Seeder;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shippingmethods=[
            'Sundarban Kuriar'=>'100',
            'Continental'=>'100',
            'S A Paribahan'=>'100',
            'Bus'=>'100',
            'Truck'=>'200',
            'Home Delivary'=>'50',
            'Ship'=>'1000',
            'Flight'=>'2000',
        ];
        collect($shippingmethods)->each(function($price,$name){
            ShippingMethod::create([
                'price'=>$price,
                'name'=>$name,
            ]);
        });
    }
}
