<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admiin@admin.com',
            'password' => '$2y$10$uQWOnI8afITs3RozMuO5A.kkR5p95DNr0AsGfKw3YulPmDmLx.DCu',
        ])->assignRole('writer', 'admin');
    }
}
