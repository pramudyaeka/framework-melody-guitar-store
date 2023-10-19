<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Akun =
        [
            [
                'id'=>'30',
                'username'=>'Pramudya',
                'email'=>'pramudya@example.net',
                'password'=>'123456'
            ]
            ];

    }
}
