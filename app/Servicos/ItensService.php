<?php

namespace App\Servicos;

// Se fosse utilizar um model
use App\Servico;

class ItensService{
    
    public function index(){
        // Se fosse utilizar um model
        // $servicos = Servico::all();
        
        $itens = ['item01', "item02"];
        return $itens;
    }
}