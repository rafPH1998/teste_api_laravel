<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PointStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'points' => 'required|integer',
            'spent' => 'nullable|numeric|min:0|max:99999999.99',
        ];
    }
}
