<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required',
            'razao_social' => 'required',
            'pais_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            
            'nome.required' => 'O campo NOME é de preenchimento obrigatório!', 
            'razao_social.required' => 'O campo Razão Social é de preenchimento obrigatório!',
            'pais_id.required' => 'Necessário Informar um Pais',
        ];
    }
}
