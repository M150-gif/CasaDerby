<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
class userseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // [
            //     'name' => 'Admin Store',
            //     'email' => 'adminstore@example1.com',
            //     'role' => 'admin_equipe_rca',
            //     'email_verified_at' => now(),
            //     'password' => Hash::make('password1234'), // Change this to a secure password
            //     'remember_token' => Str::random(10),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'Admin Store',
            //     'email' => 'adminstore@example2.com',
            //     'role' => 'admin_equipe_wac',
            //     'email_verified_at' => now(),
            //     'password' => Hash::make('password1235'), // Change this to a secure password
            //     'remember_token' => Str::random(10),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'Admin Store',
            //     'email' => 'adminstore@example3.com',
            //     'role' => 'client',
            //     'email_verified_at' => now(),
            //     'password' => Hash::make('password1236'), // Change this to a secure password
            //     'remember_token' => Str::random(10),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => 'Admin Store',
                'email' => 'adminstore@exampl.com',
                'role' => 'admin_store',
                'email_verified_at' => now(),
                'password' => Hash::make('password1236f'), // Change this to a secure password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
            // ,[
            //     'name' => 'Admin Store',
            //     'email' => 'adminstore@example.com',
            //     'role' => 'admin_store',
            //     'email_verified_at' => now(),
            //     'password' => Hash::make('password123'), // Change this to a secure password
            //     'remember_token' => Str::random(10),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]
        ]);
    }
}
