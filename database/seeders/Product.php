<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i < 100; $i++) {
        DB::table('product')->insert([
            'name' => Str::random(30),
            'description' => Str::random(rand(20,200)),
        ]);
        }
    }
}
