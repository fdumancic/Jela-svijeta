<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class TagTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//meat
        	DB::table('tag_translations')->insert([
        		'id' => '1',
        		'tag_id' => '1',
        		'title' => 'meat',
        		'locale' => 'en',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '2',
        		'tag_id' => '1',
        		'title' => 'meso',
        		'locale' => 'hr',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '3',
        		'tag_id' => '1',
        		'title' => 'Fleisch',
        		'locale' => 'de',
        	]);

        //vegetables
        	DB::table('tag_translations')->insert([
        		'id' => '4',
        		'tag_id' => '2',
        		'title' => 'vegetables',
        		'locale' => 'en',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '5',
        		'tag_id' => '2',
        		'title' => 'povrće',
        		'locale' => 'hr',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '6',
        		'tag_id' => '2',
        		'title' => 'Gemüse',
        		'locale' => 'de',
        	]);

        //lunch
        	DB::table('tag_translations')->insert([
        		'id' => '7',
        		'tag_id' => '3',
        		'title' => 'lunch',
        		'locale' => 'en',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '8',
        		'tag_id' => '3',
        		'title' => 'ručak',
        		'locale' => 'hr',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '9',
        		'tag_id' => '3',
        		'title' => 'Mittagessen',
        		'locale' => 'de',
        	]);

        //breakfast
        	DB::table('tag_translations')->insert([
        		'id' => '10',
        		'tag_id' => '4',
        		'title' => 'breakfast',
        		'locale' => 'en',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '11',
        		'tag_id' => '4',
        		'title' => 'doručak',
        		'locale' => 'hr',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '12',
        		'tag_id' => '4',
        		'title' => 'Frühstück',
        		'locale' => 'de',
        	]);

        //fat
        	DB::table('tag_translations')->insert([
        		'id' => '13',
        		'tag_id' => '5',
        		'title' => 'fat',
        		'locale' => 'en',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '14',
        		'tag_id' => '5',
        		'title' => 'masti',
        		'locale' => 'hr',
        	]);

        	DB::table('tag_translations')->insert([
        		'id' => '15',
        		'tag_id' => '5',
        		'title' => 'Fett',
        		'locale' => 'de',
        	]);
    }
}