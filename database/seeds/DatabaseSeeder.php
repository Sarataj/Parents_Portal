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
         //'name', 'email', 'password', 'student_name', 'student_email'

        DB::table('users')->insert([
            'name' => "Sayadur Rahaman",
            "email" => "sayadur@gmail.com",
            "password" => Hash::make('123456'),
            "student_name" => "Sarataj Sultan",
            "student_email" => "sarataj@gmail.com",
        ]);



        DB::table('students')->insert([
            'name' => "Sarataj Sultan",
            "email" => "sarataj@gmail.com",
            "password" => Hash::make('123456'),
            "parents_name" => "Sayadur Rahaman",
            "parents_email" => "sayadur@gmail.com",
        ]);


    }
}
