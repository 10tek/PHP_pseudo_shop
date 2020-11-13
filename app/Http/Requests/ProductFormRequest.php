<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductFormRequest extends FormRequest {

    public function rules() {
        return [
            'code' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'category_id' => [
                'required', Rule::exists('categories', 'id')
            ],
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:1',
            'image' => 'required'
        ];
    }
}
