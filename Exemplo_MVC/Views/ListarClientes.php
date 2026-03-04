<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>

<body>
    <h1> Clientes</h1>
    <table border="20">
        <tr>
            <th>Nome:</th>
            <th>CPF:</th>
            <th>Email:</th>
        </tr>
        <?php
        /* $dados é a primeira linha e depois a 2, a 3, e assim por diante */
        foreach ($retorno as $dados) {
            echo "<tr>";
            
            echo "<td>{$dados[0]}</td>";
            echo "<td>{$dados[1]}</td>";
            echo "<td>{$dados[2]}</td>";

            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>