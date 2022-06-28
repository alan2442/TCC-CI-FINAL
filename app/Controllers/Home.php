<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $texto;

    public function index()
    {
        return view('index');
    }

    public function quemsomos ()
    {
        return view('quem-somos');
    }

    public function contato ()
    {
        return view('contato');
    }

    public function cadastrar ()
    {
        return view('cadastrar');
    }

    public function camisas ()
    {
        return view('camisas');
    }

    public function pagina_inicial ()
    {
        return view('pagina_inicial');
    }

    public function pagLogin ()
    {
        return view('pagLogin');
    }

    public function logar()
    {
        if($this->request->getMethod()=='post') {
            $post = $this->request->getPost();
            $usuarioModel = model('App\Models\UsuarioModel');
            $usuarioModel->where('email_usu', $post['usuario']);
            $usuarioModel->where('senha_usu', $post['senha']);
            $resultado = $usuarioModel->find();
            if(empty($resultado)){
                return redirect()->to('Home/loginIncorreto');
            } else {
                return redirect()->to('PagLogado/pagina_inicial');
            }
 
        } else {
         return redirect()->to('Home/index');
        }
    }

    public function layout() {
        echo view('layout');
    }

    public function loginIncorreto() {
        $dados['msg']="Usuario e senha inválidos";
        echo view('pagLogin', $dados);
    }


}
