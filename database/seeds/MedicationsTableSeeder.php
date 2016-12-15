<?php

use Illuminate\Database\Seeder;

class MedicationsTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(base_path()."/database/seeds/medications.sql"));
    }
}
