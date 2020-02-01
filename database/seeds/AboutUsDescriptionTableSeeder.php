<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutUsDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'description' => 'Ace Marks was not created on a whim. It is the product of a lifetime of experience in the luxury footwear business and realizing that it’s broken - men should not have to spend obscene amounts for a handcrafted world-class shoe. So we set out to fix it.',
                'sub_description' => 'In late 2012 we realized that men had three choices when it came to dress shoes. Buy cheap, poorly made shoes, spend a little more to get a pair with a slight cosmetic upgrade, or spend an uncomfortable amount on a pair from the luxury super powers. If you like to look good, these aren’t good choices.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('about_us_description')->insert($data);
    }
}
