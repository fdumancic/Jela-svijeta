<?php

namespace App\Http\Requests;

use App\Rules\ValidCategory;
use App\Rules\ValidTag;
use App\Rules\ValidTimestamp;
use App\Rules\ValidWith;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [

                'lang' => 'required|exists:languages,code',
                'per_page' => 'integer|min:1',
                'page' => 'integer|min:1',
                'category' => ['nullable', new ValidCategory()],
                'with' => ['string', new ValidWith()],
                'tags' => new ValidTag('tags'),
                'diff_time' => ['string', new ValidTimestamp()],

        ];
    }
}
