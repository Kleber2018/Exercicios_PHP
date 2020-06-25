<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    //protected $fillable = ['id', 'titulo', 'status'];

    public function autor(){
        return $this->hasOne('App\Autor');
    }
}
