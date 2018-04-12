<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class CategoryTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//salads
        	DB::table('category_translations')->insert([
        		'id' => '1',
        		'category_id' => '1',
        		'title' => 'salads',
        		'locale' => 'en',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '2',
        		'category_id' => '1',
        		'title' => 'salate',
        		'locale' => 'hr',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '3',
        		'category_id' => '1',
        		'title' => 'Salate',
        		'locale' => 'de',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        //vegetarian
        	DB::table('category_translations')->insert([
        		'id' => '4',
        		'category_id' => '2',
        		'title' => 'vegetarian',
        		'locale' => 'en',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '5',
        		'category_id' => '2',
        		'title' => 'vegetarijansko',
        		'locale' => 'hr',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '6',
        		'category_id' => '2',
        		'title' => 'Vegetarier',
        		'locale' => 'de',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        //grill
        	DB::table('category_translations')->insert([
        		'id' => '7',
        		'category_id' => '3',
        		'title' => 'grill',
        		'locale' => 'en',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '8',
        		'category_id' => '3',
        		'title' => 'roštilj',
        		'locale' => 'hr',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '9',
        		'category_id' => '3',
        		'title' => 'Grill',
        		'locale' => 'de',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        //fried
        	DB::table('category_translations')->insert([
        		'id' => '10',
        		'category_id' => '4',
        		'title' => 'fried',
        		'locale' => 'en',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '11',
        		'category_id' => '4',
        		'title' => 'prženo',
        		'locale' => 'hr',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '12',
        		'category_id' => '4',
        		'title' => 'gebraten',
        		'locale' => 'de',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        //glucose free
        	DB::table('category_translations')->insert([
        		'id' => '13',
        		'category_id' => '5',
        		'title' => 'glucose free',
        		'locale' => 'en',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '14',
        		'category_id' => '5',
        		'title' => 'bez glukoze',
        		'locale' => 'hr',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);

        	DB::table('category_translations')->insert([
        		'id' => '15',
        		'category_id' => '5',
        		'title' => 'Glukose frei',
        		'locale' => 'de',
        		/*'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),*/
        	]);
    }
}