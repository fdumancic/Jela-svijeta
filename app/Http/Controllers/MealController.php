<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests\ValidationRequest;
use App\Models\Tag;
use App\models\Meal;
use App\models\MealTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Resources\Meal as MealResource;

class MealController extends Controller
{
    protected $lang = 'en';
    protected $per_page = '3';
    protected $page = '1';
    protected $category = false;
    protected $tags = '';
    protected $with = '';
    protected static $diff_time;

    public static function getDiff()
    {
        return self::$diff_time;
    }

    public function read(ValidationRequest $request)
    {

        $this->lang = $request->input('lang', '');
        $this->per_page = $request->input('per_page', '');
        $this->page = $request->input('page', '');
        $this->category = $request->input('category', false);
        $this->with = $request->input('with', '');
        $this->with = $request->has('with') ? explode(',', $request->with) : [];
        $this->tags = $request->input('tags', '');
        $this->tags = $request->has('tags') ? explode(',', $request->tags) : [];
        self::$diff_time = $request->input('diff_time', '');

        if(!empty($this->lang)){
            $data = Meal::whereHas('translations', function ($query) {
                    App::setLocale($this->lang);
                    $query->where('locale', 'LIKE', '%'.$this->lang.'%');
                });

            if(!empty($this->tags)){
               foreach($this->tags as $item) {
                    $data = $data->whereHas('tags', function($q) use ($item) {
                        return $q->where('tags.id', $item);
                    });
                }
            }

            if($this->category !== false) {

                if($this->category == 'NULL' || $this->category == 'null') {
                    $data = $data->whereNull('category_id');
                }
                elseif($this->category == '!NULL' || $this->category == '!null') {
                    $data = $data->whereNotNull('category_id');
                }
                else {
                    $data = $data->where('category_id', $this->category);
                }
            }

            if(!empty($this->with)){
                $data = $data->with($this->with);
            }

            if(!empty(self::$diff_time)){
                $date = Carbon::createFromTimestamp(self::$diff_time)->toDateTimeString();
                $data = $data->withTrashed()->whereHas('tags', function($q) use ($date) {
                    return $q->where('created_at', '>', $date)->orWhere('updated_at', '>', $date)->orWhere('deleted_at', '>', $date);
                    });
            }

            $data = $data->orderBy('id')->paginate($this->per_page, ['*'], 'page', $this->page);

            return MealResource::collection($data);
        }

    }
}
