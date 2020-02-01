<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShoeStyleColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeStyleColors = [
            [
                'shoe_style_id' => '1',
                'color' => 'brown',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '1',
                'color' => 'grey',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '1',
                'color' => 'black',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '1',
                'color' => 'navy',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '2',
                'color' => 'light brown',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '2',
                'color' => 'burgundy',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '2',
                'color' => 'dark brown',
                'image_url' => '',
                'color_price' => '0',
            ],
            [
                'shoe_style_id' => '2',
                'color' => 'black',
                'image_url' => '',
                'color_price' => '0',
            ],
        ];
        DB::table('shoe_style_colors')->insert($shoeStyleColors);
    }
}
