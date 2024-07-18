<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'username' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('adm123')
            ],
            [
                'name' => 'petugas',
                'email' => 'petugas@mail.com',
                'username' => 'petugas',
                'role' => 'petugas',
                'password' => bcrypt('ptg123')
            ],
            [
                'name' => 'mahasiswa',
                'email' => 'mahasiswa@mail.com',
                'username' => 'mahasiswa',
                'role' => 'mahasiswa',
                'password' => bcrypt('mhs123')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }

        User::factory()->create([
            'name' => 'solo',
            'email' => 'solo@mail.com',
            'username' => 'solo',
            'role' => 'solo',
            'password' => bcrypt('solo123'),
        ]);
    }
}
