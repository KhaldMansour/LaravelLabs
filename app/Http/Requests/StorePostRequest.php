<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            
                'title' => 'required|unique:posts| min:3',
                'desc' => 'required| min:10',
            
        ];
    }
    public function messages()
{
    return [
           'title.min' => 'title length is below required',
           'desc.min' => 'Description must be more than that',
         ];
}
}
