<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class loginRequest extends FormRequest
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
           /* 'email'=>'required',
            'contraseña'=>'required'*/
        ];
    }
    public function getCredentials(){
      /*  $email=$this->get('email');
        if($this->isnombre($email)){
        return['email'=>$email,'contraseña'=> $this->get('contraseña')];
       }
       return $this->only('email','contraseña');*/
    }
   /* public function isnombre($value){
        $factory=$this->container->make(ValidationFactory::class);
        return !$factory->make(['email'=>$value],['email'=>'nombre'])->fails();
    }*/
}
