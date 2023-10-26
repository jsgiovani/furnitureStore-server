<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Office',
            'slug' => 'office',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Living Room',
            'slug' => 'living-room',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Kitchen',
            'slug' => 'kitchen',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Beedroom',
            'slug' => 'bedroom',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Dining',
            'slug' => 'dining',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
