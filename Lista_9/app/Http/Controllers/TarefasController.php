<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefas;
use App\Autor;

class TarefasController extends Controller
{
    public function index(){


        $tarefa = Tarefas::all();

        echo '</br>Retorno dos dados do banco</br></br>';
        foreach ($tarefa as $valor){
            echo '</br>';
            print_r($valor['titulo']);
        }

        echo '</br>';
        echo '</br>Retorno dos dados do banco co filtro</br></br>';
        $tarefaFiltro = Tarefas::where('status', 1)
                                ->orderBy('titulo', 'asc')
                                ->paginate(2);

        foreach ($tarefaFiltro as $valor){
            echo '</br>';
            print_r($valor['titulo']);
        }
        return view('index', ['tarefas' => $tarefaFiltro]);

    }


    public function create(Request $request){
        $tarefa = new Tarefas();
        $tarefa->titulo = $request->titulo;
        $tarefa->status = false;
        $tarefa->save();
        return redirect('/');
        $autor = new Autor;
        $autor->nome=$request->autor;
        $tarefa->autor()->save($autor);


    }
}
