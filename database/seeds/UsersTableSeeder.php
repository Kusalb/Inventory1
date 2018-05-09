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
        User::create(array(
            'username' => 'abhishek',
            'email'    => 'abhishek.kadariya@gmail.com',
            'password' => Hash::make('abhishek'),
        ));  //
    }
}
