<?php

session_start();

if (isset($_SESSION['listaTarefas'])) {
    $listaTarefas = $_SESSION['listaTarefas'];
} else {
    $listaTarefas = array();
}

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa = array();

    $tarefa['nome'] = $_GET['nome'];

    if (isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }
    if (isset($_GET['prazo'])) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];


    if (isset($_GET['concluida'])) {
        $tarefa['concluida'] = $_GET['concluida'];
        $tarefa['concluida'] = 'Sim';
    } else {
        $tarefa['concluida'] = 'Não';
    }

    $_SESSION['listaTarefas'][] = $tarefa;

    // Salvar a tarefa em um arquivo json
    $jsonData = json_encode($tarefa);
    file_put_contents("tarefa.json", $jsonData);
}

include "template.php";
