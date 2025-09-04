<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  magichomes\User::create([
            'name' => 'Trickuweb',
            'email' => 'trickuweb@gmail.com',
            'password' => bcrypt('123456'),
            'contact' => '8789529215',
            'admin' => 1
        ]);
        
        magichomes\Profile::create([
            'user_id' => $user->id,
            'contact1' => $user->contact,
            'email' => $user->email,
            'contact2' => '8252469683',
            'street' => 'Saguna More',
            'city' => 'Patna',
            'state' => 'Bihar',

        ]);   
    }
}
