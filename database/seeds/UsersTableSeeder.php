<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete(); 

        DB::table('users')->insert(array(
        	'username' 	=> 'mawey',
        	'email' 	=> 'neoproyecto@gmail.com',
        	'password' 	=> bcrypt('r1c4r'),
        	'is_admin' 		=> true,
        	'created_at' => '2016-02-10 17:13:38',
        	'updated_at' => '2016-02-10 17:13:38',
        ));

        factory(behabitat\User::class, 30)->create([
        	'remember_token' => NULL
        ]);

    }
}
