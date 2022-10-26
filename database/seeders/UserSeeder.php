<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Bibo Murphy',
                'alamat' => 'Jalan Buluh Indah',
                'notelp' => '085847172850',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'divisi_id' => 1,
                'golongan_id' => 1,
                'email' => 'bibomurphy@gmail.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        };
    }
}
