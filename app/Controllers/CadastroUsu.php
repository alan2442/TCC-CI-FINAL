<?php

namespace App\Controllers;


use App\Models\UsuarioCadastro;

class CadastroUsu extends BaseController
{
    public function Cadastro()
    {
        $nome = $this->request->getPost('nome_usu');
        $cpf = $this->request->getPost('cpf_usu');
        $email = $this->request->getPost('email_usu');
        $senha = $this->request->getPost('senha_usu');
        $cidade = $this->request->getPost('cid_ende');
        $rua = $this->request->getPost('rua_ende');
        $numero = $this->request->getPost('num_ende');
        $bairro = $this->request->getPost('bairro_ende');
        $complemento = $this->request->getPost('complemen_ende');

        $data = [
            'nome' => $nome,
            'cpf' => $cpf,
            'email' => $email,
            'senha' => $senha,
            'cidade' => $cidade,
            'rua' => $rua,
            'numero' => $numero,
            'bairro' => $bairro,
            'complemento' => $complemento
        ];

        $UsuarioCadastro = model('App\Models\UsuarioCadastro');
        
        $request = $UsuarioCadastro->save($data);

        if($request) {
            return view('pagLogin');
        } else {
            echo "Erro";
        }
    }
}
