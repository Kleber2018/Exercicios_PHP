<?php
 
namespace App\Controllers;
 
use \App\Models\Tarefa;
 
class TarefaController{
 
    public function index()
    {
        $tarefa = new Tarefa();
        $tarefa->setCodigo(123);
        $tarefa->setData(date('d/m/Y'));
        echo "<h1> testando autoloader </h1>";
        echo "<h3>Venda Código: " . 
                $tarefa->getCodigo() .
                " - Data: " .
                $tarefa->getData() .
         "</h3>";

 
    }
 
}