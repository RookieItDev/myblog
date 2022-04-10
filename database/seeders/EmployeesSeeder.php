<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
            [
            [
                'fullname' => 'jhon Choaria',
                'gender' => 'male',
                'email' => 'jhon@gmail.com',
                'tel' => '089282256',
                'age' => 20,
                'address' => '88/99 bangpa-in bankot ayutthaya',
                'avartar' => 'no avartar',
                'status' => 1,
            ],
            [
                'fullname' => 'win desal',
                'gender' => 'male',
                'email' => 'win@gmail.com',
                'tel' => '089282258',
                'age' => 25,
                'address' => '88/99 bangpa-in bankot ayutthaya',
                'avartar' => 'no avartar',
                'status' => 1,
            ],
            [
                'fullname' => 'buma',
                'gender' => 'female',
                'email' => 'buma@gmail.com',
                'tel' => '089282251',
                'age' => 29,
                'address' => '88/99 bangpa-in bankot ayutthaya',
                'avartar' => 'no avartar',
                'status' => 1,
            ],
            ]
            );
    }
}
