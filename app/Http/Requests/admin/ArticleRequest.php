<?php

namespace App\Http\Requests\admin;

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
        if ($this->method() == "post") {
            return [
                "title" => "required|min:20|max:200",
                "description" => "required|min:20|max:200",
                "body" => "required|min:300|max:5000",
                "imageUrl" => "required|mimes:jpeg,png,bmp"
            ];
        }
        return [
            "title" => "required|min:20|max:200",
            "description" => "required|min:20|max:200",
            "body" => "required|min:300|max:5000",
            "imageUrl" => "required|mimes:jpeg,png,bmp"
        ];

    }
}
