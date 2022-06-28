<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PagLogado extends BaseController
{
    public function pagina_inicial()
    {
        return view('paginasLogado/pagina_inicial');
    }

    public function quemsomos ()
    {
        return view('paginasLogado/quem-somos');
    }

    public function contato ()
    {
        return view('paginasLogado/contato');
    }


    public function camisas ()
    {
        return view('paginasLogado/camisas');
    }

}
