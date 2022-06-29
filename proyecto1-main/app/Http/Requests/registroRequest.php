<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registroRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

          'nombre'=>'required|unique:usuario,nombre',
          'email'=>'required|unique:usuario,email',
          'contraseña'=>'required|min:8',
          'contraseña_confirmacion'=>'required|same:contraseña'
        ];
    }
   
}
