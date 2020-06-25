<?php

use Illuminate\Database\Seeder;

class ProficiencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proficiencies')->insert([
        	
        	'name' => Str::random(10)
        ]);
    }
}
