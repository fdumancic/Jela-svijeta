<?php

namespace App\models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['title'];

}
