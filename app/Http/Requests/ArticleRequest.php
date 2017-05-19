<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        $rules['title'] = 'required';
        $rules['tag_id'] = 'required';
        $rules['content'] = 'required';
        $rules['category_id'] = 'min:0';

        if (request()->isMethod('PUT') || request()->isMethod('PATH')) {
            $rules[id] = 'numeric|required';
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'required' => trans('validation.required'),
            'numeric' => trans('validation.numeric')
        ];
    }
}
