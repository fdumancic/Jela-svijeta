<?php

namespace App\models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['title'];

}

