<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'config_key' => \App\Models\Configuration::CONFIG_KEYS['INDIEGOGO'],
                'config_value' => 'https://www.indiegogo.com/projects/volterman-world-s-most-powerful-smart-wallet-powerbank#/',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('configurations')->insert($settings);
    }
}
