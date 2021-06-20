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
            'products.*.variation_id'=>'required|exists:product_variations,id',
            'products.*.size_id'=>'required|exists:sizes,id',
            'products.*.image_id'=>'required|exists:product_images,id',
            'products.*.quantity'=>'numeric|min:1',
        ];
    }
}
