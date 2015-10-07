<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class NecessidadeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Todos uauarios estão autorizados a enviar este request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Criando as validações personalizadas
        return [
            'descricao' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Informe a descrição da necessidade',
            'descricao.min' => 'A descrição deve ter no mínimo 4 caracteres'
        ];
    }
}
