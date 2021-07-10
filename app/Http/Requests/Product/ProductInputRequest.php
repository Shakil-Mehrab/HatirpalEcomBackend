<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductInputRequest extends FormRequest
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
            'name'=>'required|max:255',
            'old_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'minimum_order'=>'required|numeric',
            'unit'=>'required|',
            'brand'=>'required|max:50',
            'stock'=>'required|numeric',
            'thumbnail'=>'mimes:jpg,png',
            'images.*'=>'mimes:jpg,png',
            'size_id'=>"required"

        ];
    }
}