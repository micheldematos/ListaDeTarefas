<?php

namespace App\Controllers;
use App\Models\BD_Model;

class CadastrarDados extends \App\Controllers\BaseController
{    
    // Método responsável por exibir o formulário de cadastro das tarefas
    function TelaCadastrarTarefa(){
        return view('formCadastrarTarefa');
    }
    
    // Método responsável por cadastrar tarefa no BD_Model e exibir a lista atualizada de tarefas cadastradas
    function cadastrarTarefa(){
        $bd_model = new BD_Model();
        $bd_model->cadastrarTarefa($this->request->getPost('nome'), $this->request->getPost('desc'));
        
        $att = new ConsultarDados();
        return $att->exibirTarefas();
    }
    
}
