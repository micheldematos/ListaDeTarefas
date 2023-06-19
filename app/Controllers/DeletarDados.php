<?php

namespace App\Controllers;
use App\Models\BD_Model;

class DeletarDados extends \App\Controllers\BaseController
{    
    
    // Método responsável por editar tarefa no BD_Model e exibir a lista atualizada de tarefas cadastradas
    function deletarTarefa($cod = null){
        $bd_model = new BD_Model();
        $bd_model->deletarTarefa($cod);
        
        $att = new ConsultarDados();
        return $att->exibirTarefas();
    }
    
}