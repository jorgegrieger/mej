<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoRequest extends FormRequest
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
        $this->sanitizar();

        return [
            'nome'  => 'required',
            'valor' => 'required',
        ];
    }
    public function messages()
    {
        
        return [
            'nome.required' => 'O campo nome é obrigratório!',
            'valor.required' => 'O campo valor é obrigatório!',
        ];
    }
    public function sanitizar()
    {
        $data = $this->all();

        $data['valor'] = str_replace('.','',$data['valor']);
        $data['valor'] = str_replace(',','.',$data['valor']);
        $this->replace($data);
    }
}
