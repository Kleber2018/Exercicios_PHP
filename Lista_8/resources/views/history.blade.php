<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<html>
    <h1>Cotação do BitCoin</h1>

<table>
    <thead><td>Data</td><td>Cotação</td></thead>
    <tbody>
        @for($i = 0; $i < $quantidade; $i++)
            <tr>
                <td>
                    {{$tabBitcoin['data'][$i]}} - {{$tabBitcoin['valor'][$i]}}
                </td>
            </tr>
        @endfor
    </tbody>
</table>
</html>

