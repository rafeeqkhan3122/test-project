<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('students')->insert([
            'name' => Str::random(10),
            'email' => Str::random(4) . '@gmail.com',
            'city' => Str::random(10),
            'contact' => Str::random(11)
        ]);
    }
}
