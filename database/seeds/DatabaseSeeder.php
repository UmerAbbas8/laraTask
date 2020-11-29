<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(VendorSeeder::class);

        //To call service seeder make sure the vendors exist first
        $this->call(ServiceSeeder::class);

    }
}
