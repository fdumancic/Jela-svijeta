<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('categories')->insert([
        		'slug' => 'salads',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'vegetarian',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'grill',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'fried',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'glucose free',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);
    }
}