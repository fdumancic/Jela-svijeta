<?php

namespace App\models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['name'];

}
