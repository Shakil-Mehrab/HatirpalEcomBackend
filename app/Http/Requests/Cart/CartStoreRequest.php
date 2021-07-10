<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CartStoreRequest extends FormRequest
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
            'products'=>'required|array',
            'products.*.product_id'=>'required|exists:products,id',
            'products.*.size_id'=>'required|exists:sizes,id',
            'products.*.image'=>'required',
            'products.*.quantity'=>'numeric|min:1',
        ];
    }
    public function messages()
    {
        return[
            'products.*.image.required'=>"Please Select a Color",
            'products.*.size_id.required'=>"Please Select a Size"
        ];
    }
}
