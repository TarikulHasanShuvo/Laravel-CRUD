<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'shuvo',
            'email'=> 'shuvo@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);


        
    }
}
