<?php

namespace App\Http\Requests\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class SupplierInputRequest extends FormRequest
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
            'phone' => 'required',
            'email' => 'required|max:50',
            'country' => 'required',
            'address' => 'required',
            'company_type' => 'required',
            'company_name' => 'required',
            'thumbnail' => 'mimes:jpg,png'
        ];
    }
}
