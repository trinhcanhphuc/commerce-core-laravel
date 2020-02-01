<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $configuration = [
            [
                'config_key' => 'HOME_VIDEO',
                'title' => 'How To Measure Your Foot',
                'config_value' => 'https://www.youtube.com/embed/NvsnYfLIcBA',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('configurations')->insert($configuration);
    }
}
