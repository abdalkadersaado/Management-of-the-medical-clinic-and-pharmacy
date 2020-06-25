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
		// $this->call(UsersTableSeeder::class);
       // $this->call(DoctorTableSeeder::class);    

    	//factory(App\Model\Doctor::class, 3)->create();
    	
    	factory(App\Model\Proficiency::class, 2)->create();

    }
}
