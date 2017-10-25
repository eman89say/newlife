<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ArticleRequest extends FormRequest
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
    public function rules()
    {
        $id= isset($this->segments()[2])? $this->segments()[2]: "";


        return [
            'title'=>'required|min:10|max:255',
            'slug'=>['required','alpha_dash','min:5','max:255',Rule::unique('articles','slug')->ignore($id)],
            'category_id'=>'required|integer',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
        ];
    }
}
