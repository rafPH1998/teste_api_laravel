<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => 'required|string|min:3|max:200',
            'email' => 'required|email|max:200',
            'cellphone' => 'nullable|string|size:14|unique:client',
        ];
    }
}
