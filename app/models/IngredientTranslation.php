<?php

namespace App\models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class IngredientTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['title'];

}
