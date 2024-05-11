<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = ModelsUser::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        $admin->assignRole('admin');

        $dev = ModelsUser::create([
            'name' => 'dev',
            'email' => 'dev@gmail.com',
            'password' => bcrypt('dev'),
        ]);

        $dev->assignRole('dev');
        $owner = ModelsUser::create([
            'name' => 'pawonkoe',
            'email' => 'pawonkoe@gmail.com',
            'password' => bcrypt('pawonkoe'),
        ]);
        $owner->assignRole('superadmin');
    }
}
