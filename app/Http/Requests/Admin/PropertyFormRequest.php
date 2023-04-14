<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
                  'title' => ['required', 'min:8'],
            'description' => ['required', 'min:8'],
                'surface' => ['required', 'integer', 'min:10'],
                   'room' => ['required', 'integer', 'min:8'],
               'bedrooms' => ['required', 'integer', 'min:8'],
                  'floor' => ['required', 'integer', 'min:8'],
                  'price' => ['required', 'integer', 'min:8'],
                   'city' => ['required', 'min:8'],
                'address' => ['required', 'min:8'],
            'postal_code' => ['required', 'min:8'],
                   'sold' => ['required', 'boolean'],


        ];
    }
}
