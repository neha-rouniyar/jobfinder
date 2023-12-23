<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' =>'admin@admin.com',
            'password' => Hash::make('admin@1234'),
            'status'=>'1',
            'usertype'=>'admin'
        ]);
    }
}
