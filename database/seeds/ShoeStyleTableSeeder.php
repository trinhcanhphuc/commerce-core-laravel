<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShoeStyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeStyles = [
            [
                'shoe_type_id' => '1',
                'main_name' => 'coffee captoe oxford',
                'sub_name' =>'',
                'description' => '',
                'sub_description' => 'Coming soon',
                'price' => '1929000',
                'discount_price' => '10'
            ],
            [
                'shoe_type_id' => '2',
                'main_name' => 'cafein midsole oxford',
                'sub_name' =>'',
                'description' => '',
                'sub_description' => 'Coming soon',
                'price' => '2150000',
                'discount_price' => '10'
            ]
        ];
        DB::table('shoe_styles')->insert($shoeStyles);
    }
}
