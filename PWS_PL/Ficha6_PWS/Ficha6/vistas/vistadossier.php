<html>
<head>
    <title>Plano de Pagamentos</title>
</head>
<body>

<?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
?>

<h1>Plano de Pagamentos</h1>
<h4>Nome: <?= $dossier->getNome(); ?></h4>

<h4>Valor a contrair: €<?= number_format($credito, 2); ?></h4>
<h4>Número de Prestações: <?= $numPrest; ?></h4>
<h4>Data do empréstimo: <?= Carbon::now(); ?></h4>



<table border="1">

    <tr style="background-color: blue;">
        <th>Nº Prest</th>
        <th>Data</th>
        <th>Valor Mensal</th>
        <th>Valor em Dívida</th>
    </tr>
    <?php
    $rows = count($planoPrestacoes); //6
    $cols = count($planoPrestacoes[0]); //3
    //for para as linhas
    for($i=0;$i<$rows;$i++){
        echo "<tr>";
        $numDaPrestacao = $i + 1;
        echo "<td style='background-color: blue'>". $numDaPrestacao ."</td>";
        //for para as colunas
        for($j=0; $j< $cols; $j++){
            echo "<td>".$planoPrestacoes[$i][$j]."</td>";
        }
        echo "</tr>";
    }

    ?>
</table>

<p>O valor da despesa do crédito é de <?= $despesa; ?>€ e encontra-se
    na primeira prestação (<?= Carbon::now(); ?>).</p>

<a href="<?php session_destroy(); ?>">Apagar Plano</a>








</body>
</html>