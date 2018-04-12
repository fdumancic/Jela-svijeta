<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('tags')->insert([
        		'slug' => 'meat',
        	]);

        	DB::table('tags')->insert([
        		'slug' => 'vegetables',
        	]);

        	DB::table('tags')->insert([
        		'slug' => 'lunch',
        	]);

        	DB::table('tags')->insert([
        		'slug' => 'breakfast',
        	]);

        	DB::table('tags')->insert([
        		'slug' => 'fat',
        	]);
    }
}