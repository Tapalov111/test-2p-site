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
        $names = ['Дархан','Tim','John','Dastan','Niyaz'];
        $femaleNames = ['Gulnaz','Meruert','Gulim','Ayim','Saltanat','Kamila'];

        
        DB::table('users')->insert([
            'name'          => $names[ rand(0,4) ],
            'email'         => $names[ rand(0,4) ].Str::random(5).'@gmail.com',
            'password'      => Hash::make('password'),
            'gender'        => 1,
            'city_id'       => rand(0,85),
            'psychotype_id' => rand(1,16),
        ]);
        
        DB::table('users')->insert([
            'name'          => $femaleNames[ rand(0,4) ],
            'email'         => $femaleNames[ rand(0,5) ].Str::random(5).'@gmail.com',
            'password'      => Hash::make('password'),
            'gender'        => 2,
            'city_id'       => rand(0,85),
            'psychotype_id' => rand(1,16),
        ]);
    }
}
