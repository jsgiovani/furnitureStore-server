<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'id' => 1,
            'name' => 'Macros',
            'email' => 'macros@macros.com',
            'phone' => '123456789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('companies')->insert([
            'id' => 2,
            'name' => 'Sears',
            'email' => 'sears.sales@sears.com',
            'phone' => '123456789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('companies')->insert([
            'id' => 3,
            'name' => 'Ikea',
            'email' => 'ikea.sales@ikea.com',
            'phone' => '123456789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
