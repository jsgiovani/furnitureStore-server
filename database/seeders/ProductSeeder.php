<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Suede Armchair',
            'category_id' => 1,
            'company_id' => 1,
            'slug' => 'suede-armchair',
            'price' => '259',
            'img_url' => 'product-1.jpeg',
            'review'  => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 2,
            'name' => 'albany sectional',
            'category_id' => 2,
            'company_id' => 2,
            'slug' => 'albany-sectional',
            'price' => '1099',
            'img_url' => 'product-2.jpeg',
            'review'  => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 3,
            'name' => 'albany table',
            'category_id' => 3,
            'company_id' => 3,
            'slug' => 'albany-table',
            'price' => '3099',
            'img_url' => 'product-3.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



        DB::table('products')->insert([
            'id' => 4,
            'name' => 'armchair',
            'category_id' => 4,
            'company_id' => 1,
            'slug' => 'armchair',
            'price' => '125',
            'img_url' => 'product-4.jpeg',
            'review'  => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 5,
            'name' => 'dining table',
            'category_id' => 5,
            'company_id' => 2,
            'slug' => 'dining-table',
            'price' => '429',
            'img_url' => 'product-5.jpeg',
            'review'  => 3,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        
        DB::table('products')->insert([
            'id' => 6,
            'name' => 'emperor bed',
            'category_id' => 1,
            'company_id' => 2,
            'slug' => 'emperor-bed',
            'price' => '239',
            'img_url' => 'product-6.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        

        DB::table('products')->insert([
            'id' => 7,
            'name' => 'entertainment center',
            'category_id' => 2,
            'company_id' => 3,
            'slug' => 'entertainment-center',
            'price' => '599',
            'img_url' => 'product-7.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);




        DB::table('products')->insert([
            'id' => 8,
            'name' => 'high-back bench',
            'category_id' => 3,
            'company_id' => 1,
            'slug' => 'high-back-bench',
            'price' => '399',
            'img_url' => 'product-8.jpeg',
            'review'  => 2,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 9,
            'name' => 'leather chair',
            'category_id' => 4,
            'company_id' => 1,
            'slug' => 'leather-chair',
            'price' => '200',
            'img_url' => 'product-9.jpeg',
            'review'  => 2,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 10,
            'name' => 'leather sofa',
            'category_id' => 5,
            'company_id' => 3,
            'slug' => 'leather-sofa',
            'price' => '999',
            'img_url' => 'product-10.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 11,
            'name' => 'modern bookshelf',
            'category_id' => 1,
            'company_id' => 1,
            'slug' => 'modern-bookshelf',
            'price' => '319',
            'img_url' => 'product-11.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 12,
            'name' => 'modern poster',
            'category_id' => 2,
            'company_id' => 2,
            'slug' => 'modern-poster',
            'price' => '30',
            'img_url' => 'product-12.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 13,
            'name' => 'shelf',
            'category_id' => 3,
            'company_id' => 3,
            'slug' => 'shelf',
            'price' => '309',
            'img_url' => 'product-13.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



        DB::table('products')->insert([
            'id' => 14,
            'name' => 'simple chair',
            'category_id' => 4,
            'company_id' => 1,
            'slug' => 'simple-chair',
            'price' => '1099',
            'img_url' => 'product-14.jpeg',
            'review'  => 2,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



        DB::table('products')->insert([
            'id' => 15,
            'name' => 'sofa set',
            'category_id' => 5,
            'company_id' => 2,
            'slug' => 'sofa-set',
            'price' => '1299',
            'img_url' => 'product-15.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



        DB::table('products')->insert([
            'id' => 16,
            'name' => 'suede armchair 2',
            'category_id' => 1,
            'company_id' => 3,
            'slug' => 'suede-armchair-2',
            'price' => '1299',
            'img_url' => 'product-16.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 17,
            'name' => 'utopia sofa',
            'category_id' => 2,
            'company_id' => 1,
            'slug' => 'utopia-sofa',
            'price' => '799',
            'img_url' => 'product-17.jpeg',
            'review'  => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 18,
            'name' => 'vase table',
            'category_id' => 3,
            'company_id' => 2,
            'slug' => 'vase-table',
            'price' => '1209',
            'img_url' => 'product-18.jpeg',
            'review'  => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('products')->insert([
            'id' => 19,
            'name' => 'wooden bed',
            'category_id' => 4,
            'company_id' => 3,
            'slug' => 'wooden bed',
            'price' => '1209',
            'img_url' => 'product-19.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



        DB::table('products')->insert([
            'id' => 20,
            'name' => 'wooden desk 2',
            'category_id' => 5,
            'company_id' => 2,
            'slug' => 'wooden-desk-2',
            'price' => '1509',
            'img_url' => 'product-20.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        

        DB::table('products')->insert([
            'id' => 21,
            'name' => 'wooden table',
            'category_id' => 1,
            'company_id' => 2,
            'slug' => 'wooden-table',
            'price' => '1509',
            'img_url' => 'product-21.jpeg',
            'review'  => 5,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quia, quo, placeat, eos sapiente nobis fugit consectetur at magni ipsum non. Assumenda alias minus inventore, corrupti laborum placeat voluptatum.',
            'status' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
    }
}
