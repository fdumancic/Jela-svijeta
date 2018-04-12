<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class IngredientTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//eggs
        	DB::table('ingredient_translations')->insert([
        		'id' => '1',
        		'ingredient_id' => '1',
        		'title' => 'eggs',
        		'locale' => 'en',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '2',
        		'ingredient_id' => '1',
        		'title' => 'jaja',
        		'locale' => 'hr',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '3',
        		'ingredient_id' => '1',
        		'title' => 'Eier',
        		'locale' => 'de',
        	]);

        //onion
        	DB::table('ingredient_translations')->insert([
        		'id' => '4',
        		'ingredient_id' => '2',
        		'title' => 'onion',
        		'locale' => 'en',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '5',
        		'ingredient_id' => '2',
        		'title' => 'luk',
        		'locale' => 'hr',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '6',
        		'ingredient_id' => '2',
        		'title' => 'Zwiebel',
        		'locale' => 'de',
        	]);

        //chicken
        	DB::table('ingredient_translations')->insert([
        		'id' => '7',
        		'ingredient_id' => '3',
        		'title' => 'chicken',
        		'locale' => 'en',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '8',
        		'ingredient_id' => '3',
        		'title' => 'piletina',
        		'locale' => 'hr',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '9',
        		'ingredient_id' => '3',
        		'title' => 'Hähnchen',
        		'locale' => 'de',
        	]);

        //pasta
        	DB::table('ingredient_translations')->insert([
        		'id' => '10',
        		'ingredient_id' => '4',
        		'title' => 'pasta',
        		'locale' => 'en',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '11',
        		'ingredient_id' => '4',
        		'title' => 'tjestenina',
        		'locale' => 'hr',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '12',
        		'ingredient_id' => '4',
        		'title' => 'Pasta',
        		'locale' => 'de',
        	]);

        //mayonnaise
        	DB::table('ingredient_translations')->insert([
        		'id' => '13',
        		'ingredient_id' => '5',
        		'title' => 'mayonnaise',
        		'locale' => 'en',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '14',
        		'ingredient_id' => '5',
        		'title' => 'majoneza',
        		'locale' => 'hr',
        	]);

        	DB::table('ingredient_translations')->insert([
        		'id' => '15',
        		'ingredient_id' => '5',
        		'title' => 'Mayonnaise',
        		'locale' => 'de',
        	]);
    }
}