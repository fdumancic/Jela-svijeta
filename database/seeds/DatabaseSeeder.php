<?php

use Faker\Factory as Faker;
use Faker\Provider\Base;
use Faker\Provider\randomElement;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//languages-----------------------------------------
        	DB::table('languages')->insert([
        		'title' => 'english',
                'code' => 'en',
        	]);

        	DB::table('languages')->insert([
        		'title' => 'croatian',
                'code' => 'hr',
        	]);

        	DB::table('languages')->insert([
        		'title' => 'german',
                'code' => 'de',
        	]);

    	//categories-----------------------------------------
        	DB::table('categories')->insert([
        		'slug' => 'salads',
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'vegetarian',
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'grill',
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'fried',
        	]);

        	DB::table('categories')->insert([
        		'slug' => 'glucose free',
        	]);

        //category translations-------------------------------
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

        //meals-------------------------------------------------
        	DB::table('meals')->insert([
        		'slug' => 'chicken salad',
        		'category_id' => '1',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now()->addDays('20'),
        	]);

        	DB::table('meals')->insert([
        		'slug' => 'grilled chicken with pommes',
        		'category_id' => '3',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now()->addDays('50'),
        	]);

        	DB::table('meals')->insert([
        		'slug' => 'chicken wings',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now()->addDays('10'),
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

        //meal translations---------------------------------------
        	//chicken salad
        	DB::table('meal_translations')->insert([
        		'id' => '1',
        		'meal_id' => '1',
        		'title' => 'chicken salad',
                'description' => 'chicken salad with pasta',
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '2',
        		'meal_id' => '1',
        		'title' => 'salata s piletinom',
                'description' => 'salata s piletinom i tjesteninom',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '3',
        		'meal_id' => '1',
        		'title' => 'Hühnchensalat',
                'description' => 'Hühnchensalatmit Pasta',
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
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '5',
        		'meal_id' => '2',
        		'title' => 'piletina s roštilja s pomfritom',
                'description' => 'piletina s roštilja s pomfritom',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '6',
        		'meal_id' => '2',
        		'title' => 'gegrilltes Hähnchen mit Pommes',
                'description' => 'gegrilltes Hähnchen mit Pommes',
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
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '8',
        		'meal_id' => '3',
        		'title' => 'pileća krilca',
                'description' => 'pileca krilca s pecenim krumpirom',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '9',
        		'meal_id' => '3',
        		'title' => 'Hühnerflügel',
                'description' => 'Hühnerflügel mit Ofenkartoffel',
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
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '11',
        		'meal_id' => '4',
        		'title' => 'pečeni krumpir',
                'description' => 'pečeni krumpir',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '12',
        		'meal_id' => '4',
        		'title' => 'Ofenkartoffel',
                'description' => 'Ofenkartoffel',
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
        		'locale' => 'en',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '14',
        		'meal_id' => '5',
        		'title' => 'pileća juha',
                'description' => 'pileća juha',
        		'locale' => 'hr',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        	DB::table('meal_translations')->insert([
        		'id' => '15',
        		'meal_id' => '5',
        		'title' => 'Hühnersuppe',
                'description' => 'Hühnersuppe',
        		'locale' => 'de',
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	]);

        //tags--------------------------------------------------
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

        //tag translations----------------------------------------
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

        //ingredients-------------------------------------------
        	DB::table('ingredients')->insert([
        		'slug' => 'eggs',
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'onion',
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'chicken',
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'pasta',
        	]);

        	DB::table('ingredients')->insert([
        		'slug' => 'mayonnaise',
        	]);

        //ingredient translations----------------------------------------
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

        //meal_to_tag-----------------------------------------------------------------------
        	$faker = Faker::create('App\Meal_to_tag');

	        for($i=1; $i<=5; $i++){

	        	DB::table('meal_to_tag')->insert([
	        		'meal_id' => $faker->unique()->numberBetween($min = 1, $max = 5),
	        		'tag_id' => $faker->numberBetween($min = 1, $max = 5),
	        	]);
	        }

	        for($i=1; $i<=5; $i++){

	        	DB::table('meal_to_tag')->insert([
	        		'meal_id' => $faker->numberBetween($min = 1, $max = 5),
	        		'tag_id' => $faker->numberBetween($min = 1, $max = 5),
	        	]);
	        }

	    //meal_to_ingredient-----------------------------------------------------------------------
	        $faker = Faker::create('App\Meal_to_ingredient');

	        for($i=1; $i<=5; $i++){

	        	DB::table('meal_to_ingredient')->insert([
	        		'meal_id' => $faker->unique()->numberBetween($min = 1, $max = 5),
	        		'ingredient_id' => $faker->numberBetween($min = 1, $max = 5),
	        	]);
	        }

	        for($i=1; $i<=5; $i++){

	        	DB::table('meal_to_ingredient')->insert([
	        		'meal_id' => $faker->numberBetween($min = 1, $max = 5),
	        		'ingredient_id' => $faker->numberBetween($min = 1, $max = 5),
	        	]);
	        }
    }
}
