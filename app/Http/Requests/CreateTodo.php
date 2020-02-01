<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTodo extends FormRequest
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
            'name' => 'required|min:10',
            'description' => 'required|min:10|max:1000',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'nhap name vao thim',
            'description.required' => 'nhap description vao thim',
            'name.min' => 'nhap name lon hon 10 ky tu di thim',
            'description.min' => 'nhap description lon hon 10 ky tu di thim',
            'description.max' => 'nhap description be hon 1000 ky tu di thim',
        ];
    }
}
