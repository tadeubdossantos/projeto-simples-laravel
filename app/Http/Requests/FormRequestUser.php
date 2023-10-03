<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestUser extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $request = [];
        if($this->method() == "PUT") {
            return [
                'name' => 'required|string|max:255',
                'age' => [
                    'required',
                    'integer'
                ],
                'email' =>
                    'required',
                    'email',
                    'unique:users'
                ];
        }
        return $request;
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo Nome é obrigatório',
            'age.required' => 'Campo Idade é obrigatório',
            'age.integer' => 'Campo Idade é deve ser do tipo número',
            'email.required' => 'Campo E-mail é obrigatório',
            'email.email' => 'Campo E-mail inválido'
        ];

    }
}
