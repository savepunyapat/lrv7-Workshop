<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'fullname' => 'Somkit A',
                'gender' => 'Male',
                'email' => 'test@gmail.com',
                'tel' => '0123456789',
                'age' => 20,
                'address' => 'Hà Nội',
                'avatar' => 'avatar.jpg',
                'status' => 1,
            ],
            [
                'fullname' => 'Npunya B',
                'gender' => 'Female',
                'email' => 'test123@gmail.com', 
                'tel' => '0123456789',
                'age' => 20,
                'address' => 'Hà Nội',
                'avatar' => 'avatar.jpg',
                'status' => 1,
            ],
        ]);
    }
}
