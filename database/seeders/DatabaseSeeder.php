<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Rizki prasetya hidayat nst',
            'user_alamat'   => 'Gebang',
            'user_hp'       => '081214068855',
            'user_pos'      => '123456',
            'user_role'     => '1',
            'user_aktif'    => '1',
            'email'         => 'rizki@gmail.com',
            'password'      => Hash::make('0'000),
        ]);
    }
}
