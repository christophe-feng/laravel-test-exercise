<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 可以一次建立多筆資料 
        for ($i = 1; $i <= 50; $i++) {
            DB::table('students')->insert([
                'name' => Str::random(10),
                'mobile' => Str::random(10),
                'test' => Str::random(10),
            ]);
        }
    }
}
