<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('password'), // password
        ])->assignRole('admin');

        User::create([
            'name' => 'kepsek',
            'email' => 'kepsek@gmail.com',
            'password' =>  bcrypt('password'), // password
        ])->assignRole('kepsek');

        User::create([
            'name' => 'wali_kelas',
            'email' => 'walikelas@gmail.com',
            'password' =>  bcrypt('password'), // password
        ])->assignRole('wali_kelas');

        User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' =>  bcrypt('password'), // password
        ])->assignRole('siswa');
    }
}
