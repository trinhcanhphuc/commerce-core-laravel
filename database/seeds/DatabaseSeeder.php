<?php

use Illuminate\Database\Seeder;
//use database\seeds\UsersAndNotesSeeder;
//use database\seeds\MenusTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(MenusTableSeeder::class);
        //$this->call(UsersAndNotesSeeder::class);
        // $this->call('UsersAndNotesSeeder');
        // $this->call('MenusTableSeeder');

        $this->call('AboutUsDescriptionTableSeeder');
        $this->call('AboutUsTableSeeder');
        $this->call('ConfigurationTableSeeder');
        $this->call('EmailTemplateTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('SettingTableSeeder');
        $this->call('ShoeTypeTableSeeder');
        $this->call('ShoeStyleTableSeeder');
        $this->call('ShoeStyleColorTableSeeder');
        $this->call('SliderTableSeeder');
        $this->call('UsersTableSeeder');
    }
}
