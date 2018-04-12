<?php

namespace App\models;


use App\Http\Controllers\MealController;
use App\TransformStatus;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Eloquent {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = ['slug'];
    protected $appends = ['status'];
    protected $hidden = ['translations', 'category_id'];


    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations'];

    public function getStatusAttribute()
    {
        if (!empty(MealController::getDiff())) {
            if(!is_null($this->deleted_at)){
                    return 'deleted';
                }
                elseif($this->created_at == $this->updated_at){
                    return 'created';
                }
                elseif($this->created_at < $this->updated_at){
                    return 'modified';
                }
        } else
        {
            return 'created';
        }
    }

    public function setStatusAttribute($status)
    {
        return $status;
    }

    public function tags()
    {
        return $this->belongsToMany('App\models\Tag', 'meal_to_tag');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\models\Ingredient', 'meal_to_ingredient');
    }

    public function category()
    {
        return $this->belongsTo('App\models\Category');
    }

}