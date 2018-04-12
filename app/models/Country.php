<?php

namespace App\models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Country extends Eloquent {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['code'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations'];

}
