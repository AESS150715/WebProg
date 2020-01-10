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
        DB::table('users')->insert([
            'name' => 'Albert Sutanto',
            'email' => 'ASalbertsutanto123@gmail.com',
            'password' => Hash::make('asdf1234'),
            'pwd_confirmed' => Hash::make('asdf1234'),
            'phone' => '089699998888',
            'gender' => 'male',
            'address' => 'jl. penthul gozong',
            'pp' => '',
            'role'=> 'admin'
        ],
        [
            'name' => 'Bambang Bujank',
            'email' => 'BamBu13@gmail.com',
            'password' => Hash::make('12345678'),
            'pwd_confirmed' => Hash::make('12345678'),
            'phone' => '089688881313',
            'gender' => 'male',
            'address' => 'jl. kuthu bhusyuk',
            'pp' => '',
            'role'=> 'admin'
        ]);
    }
}
