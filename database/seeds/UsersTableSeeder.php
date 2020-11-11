<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'role_id'   => '1',
            'nama'      => 'Administrator',
            'username'       => 'admin',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('admin')
        ]);

        DB::table('users')->insert([
            'role_id'   => '2',
            'nama'      => 'Izzan',
            'username'       => '987654321',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('987654321')
        ]);

        DB::table('users')->insert([
            'role_id'   => '2',
            'nama'      => 'Barep',
            'username'       => '112233445',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('barep123')
        ]);

        DB::table('users')->insert([
            'role_id'   => '2',
            'nama'      => 'Bawul Ganteng',
            'username'       => '123987456',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('bawul123')
        ]);
    }
}
