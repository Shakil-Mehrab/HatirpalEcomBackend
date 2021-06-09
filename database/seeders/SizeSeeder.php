<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            's',
            'm',
            'l',
            'xl',
            '2xl',
            '4xl'
        ];
        foreach ($sizes as $index => $size) {
            Size::create([
                'size' => $size
            ]);
        }
    }
}
