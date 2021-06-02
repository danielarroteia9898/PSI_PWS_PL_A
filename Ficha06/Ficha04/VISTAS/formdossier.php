<html>
<head>
    <title>Vista form plano Prestacções</title>
</head>

<body>

<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
    <p>Nome: <input type="text" name="nome"> </p>
    <p>Crédito: <input type="text" name="credito"> </p>
    <p>numero de prestações: <input type="text" name="numPrestacoes"> </p>
    <button type="submit">Criar Plano</button>
</form>

<?php
    if(isset($_SESSION['planPrestacoes']))
    {
?>

    <table border = "1">
        <tr style="background-color: darkolivegreen">
            <th>Nº Prest</th>
            <th>Data</th>
            <th>Valor Mensal</th>
            <th>Valor em Divida</th>
        </tr>

    <?php
    $planPrestacoes = $_SESSION['planPrestacoes'];
    $rows = count($planPrestacoes); //vai contar as linhas da tabela R.6
    $cols = count($planPrestacoes[0]); //vai contar as colunas R.3

    for ($i = 0; $i < $rows;$i++) //para as linhas
    {
        echo "<tr>";

        //parra aparecer o numeros

        $numDaPrestacao = $i +1;
        echo "<td style='background-color: darkolivegreen'>" . $numDaPrestacao . "</td>";
        //

        for ($j =0; $j < $cols; $j++) //para as colunas
        {
            echo "<td>". $planPrestacoes[$i][$j] . "</td>";
        }

        echo "</tr>";
    }
    ?>
    <?php
    } //fecho do if
    ?>
    </table>

</body>
</html>
