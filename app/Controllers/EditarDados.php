<?php

namespace App\Controllers;
use App\Models\BD_Model;

class EditarDados extends \App\Controllers\BaseController
{    

    // Método responsável por exibir o formulário de edição das tarefas
    function telaEditarTarefa(){
        return view('formEditarTarefa');
    }
    
    // Método responsável por efetuar a consulta de tarefas em base do código
    function exibirTarefa($cod = null){
        $bdm = new \App\Models\BD_Model();
        $data['bd_model'] = $bdm->exibirTarefasSel($cod);
        return view('FormEditarTarefa',$data);
    }
    
    // Método responsável por editar tarefa no BD_Model e exibir a lista atualizada de tarefas cadastradas
    function editarTarefa($cod = null){
        $bd_model = new BD_Model();
        $bd_model->editarTarefa($this->request->getPost('nome'), $this->request->getPost('desc'), $cod);
        
        $att = new ConsultarDados();
        return $att->exibirTarefas();
    }
    
}
