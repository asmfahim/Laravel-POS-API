<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            'name' => 'Admin',
            'email' => 'admin@boighar.com',
            'phone' => '01712345678',
            'password' => Hash::make('admin'),
            'role_id' => 1,
        ];
        User::create($data);
    }
}
