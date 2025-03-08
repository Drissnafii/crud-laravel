<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('profiles')->insert([
            'name' => Str::random(17),
            'email' => Str::random(17) . '@gmail.com',
            'pass' => Hash::make('passme123'),
            'bio' => Str::random(244),
        ]);
    }
}
