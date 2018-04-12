<?php

namespace App\models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Eloquent {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];
    protected $fillable = ['slug'];
    protected $hidden = ['translations', 'pivot'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations'];

    public function meals()
    {
        return $this->belongsToMany('App\models\Meal');
    }

}