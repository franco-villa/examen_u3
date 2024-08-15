<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nombres' => 'required|string|max:15',
            'email'=>'required|string|max:20',
            'direccion'=>'required|string|max:20',
            'fono'=>'required|numeric|digits:9',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' =>  'El nombre es obligatorio.',
            'nombres.max' =>  'El nombre no debe ser mayor a 15 caracteres.',
            'email.required' =>  'El email es obligatorio.',
            'email.max' =>  'El email no debe ser mayor a 20 caracteres.',
            
            'dirección.required' =>  'La dirección es obligatorio.',
            'dirección.max' =>  'La dirección no debe ser mayor a 20 caracteres.',
            
            'fono.required' =>  'El numero telefónico es obligatorio.',
            'fono.digits' =>  'El numero telefónico debe contener 9 digitos.',
            'fono.numeric' =>  'El numero telefónico debe ser numerico.',

        ];
    }
}
