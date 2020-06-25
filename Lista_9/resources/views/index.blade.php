<!doctype html>
<html>
<h1>Tarefas</h1>
<ul>
    @foreach($tarefas as $tarefa)
        <li>{{$tarefa->titulo}}
            ({{$tarefa->autor['nome']}})
        </li>
    @endforeach
</ul>

    {{$tarefas->links()}}
<form class="" action="tarefas" method="post">
    {{csrf_field()}}
    <input type="text" name="titulo" placeholder="Titulo">
    <button>Cadastrar</button>
</form>
</html>