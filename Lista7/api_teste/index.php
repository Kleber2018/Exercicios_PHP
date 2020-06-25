<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
    <button onClick="carregar()">Carregar Usuários Aync</button>
    <ul id="usuarios"></ul>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function carregar() {
            //axios.get("http://aula14-web.dev/api.php")
            axios.get("api.php")
                .then(function(resposta){
                    var usuarios = resposta.data;
                    var lista = document.getElementById("usuarios");
                    usuarios.forEach(function (usuario){
                        lista.innerHTML += "<li>" + usuario.nome + "</li>";
                    })
                })
        }
    </script>
</html>

<!-- 
    https://blog.especializati.com.br/como-fazer-requisicoes-ajax-com-o-axios/
    https://br.vuejs.org/v2/cookbook/using-axios-to-consume-apis.html#Consideracoes-Finais
    -->