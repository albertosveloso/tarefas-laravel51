<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjetoRequest extends Request
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
            'descricao' => 'required|min:8',
            'user_list' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Informe a descrição do projeto.',
            'descricao.min' => 'A descrição deve ter no mínimo 8 caracteres',
            'user_list.required' => 'Selecione no mínimo um usuário.',

        ];
    }
}
