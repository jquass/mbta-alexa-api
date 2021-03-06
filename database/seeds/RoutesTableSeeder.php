<?php

use \Flynsarmy\CsvSeeder\CsvSeeder;

/**
 * Class RoutesTableSeeder
 */
class RoutesTableSeeder extends CsvSeeder
{
    /**
     * RoutesTableSeeder constructor.
     */
    public function __construct()
    {
        $this->table = 'routes';
        $this->filename = base_path().'/database/seeds/csvs/routes.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->table)->truncate();

        parent::run();
    }
}
