<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;

class MealTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//chicken salad
        	DB::table('meal_translations')->insert([
        		'id' => '1',
        		'meal_id' => '1',
        		'title' => 'chicken salad',
                'description' => 'chicken salad with pasta',
                'status' => 'created',
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '2',
        		'meal_id' => '1',
        		'title' => 'salata s piletinom',
                'description' => 'salata s piletinom i tjesteninom',
                'status' => 'created',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '3',
        		'meal_id' => '1',
        		'title' => 'Hühnchensalat',
                'description' => 'Hühnchensalatmit Pasta',
                'status' => 'created',
        		'locale' => 'de',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        //grilled chicken with pommes
        	DB::table('meal_translations')->insert([
        		'id' => '4',
        		'meal_id' => '2',
        		'title' => 'grilled chicken with pommes',
                'description' => 'grilled chicken with pommes',
                'status' => 'created',
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '5',
        		'meal_id' => '2',
        		'title' => 'piletina s roštilja s pomfritom',
                'description' => 'piletina s roštilja s pomfritom',
                'status' => 'created',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '6',
        		'meal_id' => '2',
        		'title' => 'gegrilltes Hähnchen mit Pommes',
                'description' => 'gegrilltes Hähnchen mit Pommes',
                'status' => 'created',
        		'locale' => 'de',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        //chicken wings
        	DB::table('meal_translations')->insert([
        		'id' => '7',
        		'meal_id' => '3',
        		'title' => 'chicken wings',
                'description' => 'chicken wings with baked potato',
                'status' => 'created',
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '8',
        		'meal_id' => '3',
        		'title' => 'pileća krilca',
                'description' => 'pileca krilca s pecenim krumpirom',
                'status' => 'created',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '9',
        		'meal_id' => '3',
        		'title' => 'Hühnerflügel',
                'description' => 'Hühnerflügel mit Ofenkartoffel',
                'status' => 'created',
        		'locale' => 'de',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        //baked potato
        	DB::table('meal_translations')->insert([
        		'id' => '10',
        		'meal_id' => '4',
        		'title' => 'baked potato',
                'description' => 'baked potato',
                'status' => 'created',
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '11',
        		'meal_id' => '4',
        		'title' => 'pečeni krumpir',
                'description' => 'pečeni krumpir',
                'status' => 'created',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '12',
        		'meal_id' => '4',
        		'title' => 'Ofenkartoffel',
                'description' => 'Ofenkartoffel',
                'status' => 'created',
        		'locale' => 'de',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        //chicken soup
        	DB::table('meal_translations')->insert([
        		'id' => '13',
        		'meal_id' => '5',
        		'title' => 'chicken soup',
                'description' => 'chicken soup',
                'status' => 'created',
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '14',
        		'meal_id' => '5',
        		'title' => 'pileća juha',
                'description' => 'pileća juha',
                'status' => 'created',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '15',
        		'meal_id' => '5',
        		'title' => 'Hühnersuppe',
                'description' => 'Hühnersuppe',
                'status' => 'created',
        		'locale' => 'de',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);
    }
}