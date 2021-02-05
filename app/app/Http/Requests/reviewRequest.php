<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reviewRequest extends FormRequest
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
        return [
            'rating' => 'integer|min:1|max:5',
            'review' => 'size:255'
        ];
    }
}
