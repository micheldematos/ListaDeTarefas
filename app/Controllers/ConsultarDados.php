<?php

namespace App\Controllers;
use App\Models\BD_Model;

class ConsultarDados extends \App\Controllers\BaseController
{

    // Método responsável por exibir a lista de tarefas cadastradas
    function exibirTarefas(){
        $bdm = new \App\Models\BD_Model();
        $data['bd_model'] = $bdm->exibirTarefas();
        return view('DadosTarefas',$data);
    }
    
}
