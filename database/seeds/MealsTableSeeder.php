<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('meals')->insert([
        		'slug' => 'chicken salad',
        		'category_id' => '1',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meals')->insert([
        		'slug' => 'grilled chicken with pommes',
        		'category_id' => '3',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meals')->insert([
        		'slug' => 'chicken wings',
        		'category_id' => '4',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meals')->insert([
        		'slug' => 'baked potato',
        		'category_id' => '2',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meals')->insert([
        		'slug' => 'chicken soup',
        		'category_id' => '5',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);
    }
}