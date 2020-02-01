<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShoeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeTypes = [
            [
                'name' => 'coffee',
                'full_name' => 'coffee',
                'description' => '',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'cafein',
                'full_name' => 'cafein midsole',
                'description' => '',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('shoe_types')->insert($shoeTypes);
    }
}
