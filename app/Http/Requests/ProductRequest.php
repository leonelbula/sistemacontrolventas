<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'codigo'=>'required|max:150',
            'name'=>'required|max:150',
            'cost'=>'required',
            'price'=>'required',
            'price_two'=>'required',
            'price_three'=>'required',
            'utility'=>'required',
            'utility_two'=>'required',
            'utility_three'=>'required',
            'minimum_amount'=>'required',
            'amount'=>'required',

        ];
    }
}
