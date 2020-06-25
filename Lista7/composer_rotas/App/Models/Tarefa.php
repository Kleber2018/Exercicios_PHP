<?php

namespace App\Models;
 
class Tarefa{
 
    private $codigo;
    private $data;
 
    public function getCodigo()
    {
        return $this->codigo;
    }
 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
 
    public function getData()
    {
        return $this->data;
    }
 
    public function setData($data)
    {
        $this->data = $data;
    }
 
}