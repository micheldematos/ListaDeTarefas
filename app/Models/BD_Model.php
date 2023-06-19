<?php

namespace App\Models;

use CodeIgniter\Model;

class BD_Model extends Model
{   
    // Método responsável por efetuar a consulta de todas as tarefas cadastradas no BD
    function exibirTarefas(){
        return $this->db->query("SELECT * FROM tarefa");
    }

    // Método responsável por efetuar a consulta de tarefas em base do código, utilizado no Update
    public function exibirTarefasSel($cod){
        return $this->db->query("SELECT * FROM tarefa WHERE codTarefa = $cod");
    }
    
     // Método responsável por efetuar o cadastro de tarefas no BD
    function cadastrarTarefa($nome, $desc){
        return $this->db->query("INSERT INTO tarefa VALUES (NULL, '$nome','$desc')");
    }
    
     // Método responsável por editar as tarefas no BD
    function editarTarefa($nome, $desc, $cod){
        return $this->db->query("UPDATE `tarefa` SET `nomeTarefa` = '$nome', `descTarefa` = '$desc' WHERE `tarefa`.`codTarefa` = '$cod'");
    }

     // Método responsável por deletar as tarefas no BD
    function deletarTarefa($cod){
        return $this->db->query("DELETE FROM `tarefa` WHERE `tarefa`.`codTarefa` = $cod");
    }
}
