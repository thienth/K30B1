<?php

use Illuminate\Database\Seeder;
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	['email' => 'thienth32@gmail.com', 'name' => 'thienth', 'password' => Hash::make('123456')],
        	['email' => 'quannv@gmail.com', 'name' => 'quannv', 'password' => Hash::make('123456')]
        ];

        DB::table('users')->insert($users);
    }
}
