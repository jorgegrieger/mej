<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'valor_venda' => 'required',
        ];
    }
    public function messages()
    {
        
        return [
            'nome.required' => 'O campo nome é obrigratório!',
            'valor_venda.required' => 'O campo valor venda é obrigatório!',
        ];
    }
    public function sanitizar()
    {
        $data = $this->all();

        $data['valor_venda'] = str_replace('.','',$data['valor_venda']);
        $data['valor_venda'] = str_replace(',','.',$data['valor_venda']);

        $data['valor_compra'] = str_replace('.','',$data['valor_compra']);
        $data['valor_compra'] = str_replace(',','.',$data['valor_compra']);
        $this->replace($data);


    }
}
