<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$faker = Faker::create('App\Ingredients');
        	DB::table('ingredients')->insert([
        		'slug' => 'eggs',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'onion',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'chicken',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'pasta',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'mayonnaise',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);
    }
}
