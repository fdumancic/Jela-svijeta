<?php

namespace App\Http\Controllers;

use App;
use App\models\Category;
use App\models\Country;
use App\models\Ingredient;
use App\models\Meal;
use App\models\Tag;
use Auth;
use Illuminate\Http\Request;


class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function test()
    {
        $meal = Meal::where('slug', 'chicken salad')->first();
        echo $meal->translate('en')->title;
        echo '<br>';
        echo $meal->translate('hr')->title;
        echo '<br>';
        echo $meal->translate('de')->title;
        echo '<br>';
        echo '<br>';

        $ingredient = Ingredient::where('slug', 'eggs')->first();
        echo $ingredient->translate('en')->title;
        echo '<br>';
        echo $ingredient->translate('hr')->title;
        echo '<br>';
        echo $ingredient->translate('de')->title;
        echo '<br>';
        echo '<br>';

        $category = Category::where('slug', 'vegetarian')->first();
        echo $category->translate('en')->title;
        echo '<br>';
        echo $category->translate('hr')->title;
        echo '<br>';
        echo $category->translate('de')->title;
        echo '<br>';
        echo '<br>';

        $tag = Tag::where('slug', 'meat')->first();
        echo $tag->translate('en')->title;
        echo '<br>';
        echo $tag->translate('hr')->title;
        echo '<br>';
        echo $tag->translate('de')->title;
        echo '<br>';
        echo '<br>';
    }


}