<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
          'quantity' => 'required|numeric',
          'unit_price' => 'required|two_dp_validation',
          // 'unit_price' => 'required|numeric|between:0.00,99.99',
          'item_name' => 'required|unique:items',
          // 'category_id' => 'required'
        ];
    }
}
