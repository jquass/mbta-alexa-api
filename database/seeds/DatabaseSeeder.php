<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoutesTableSeeder::class);
        $this->call(StopsAndDirectionsTablesSeeder::class);
    }
}
