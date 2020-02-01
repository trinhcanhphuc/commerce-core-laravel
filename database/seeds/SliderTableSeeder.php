<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoesTypes = [
            [
                'title' => 'Custom Fit Footwear in Minutes',
                'description' => 'The most comfortable footwear that\'s custom made to you – using only a smartphone',
                'image' => 'banner.png',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Custom Fit Footwear in Minutes',
                'description' => 'The most comfortable footwear that\'s custom made to you – using only a smartphone',
                'image' => 'banner.png',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Custom Fit Footwear in Minutes',
                'description' => 'The most comfortable footwear that\'s custom made to you – using only a smartphone',
                'image' => 'banner.png',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('slider')->insert($shoesTypes);
    }
}
