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
            'Truck  (Extra charge required. Contact us)'=>'200',
            'Pickup Van (Extra charge required. Contact us)'=>'2000',
            'Home Delivary'=>'50',
            'Ship  (Extra charge required. Contact us)'=>'1000',
            'Flight  (Extra charge required. Contact us)'=>'2000',
        ];
        collect($shippingmethods)->each(function($price,$name){
            ShippingMethod::create([
                'price'=>$price,
                'name'=>$name,
            ]);
        });
    }
}
