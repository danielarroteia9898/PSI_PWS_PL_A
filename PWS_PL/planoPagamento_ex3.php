<html>
<head>
    <title> Plano Pagamento</title>

</head>
<body>
<?php
        require 'vendor/autolaod.php';

        use Carbon\Carbon;

        $credito = 1000;
        $numPrest = 6;


        $dataInicial = Carbon::now();

        $valorPrestMensal = $credito / $numPrest;


        for ($i=0; $i< $numPrest; i++){
            $dataInicial = Carbon::now();
            $credito -= $valorPrestMensal;
            $dt = $dataInicial ->addMonths($i);

            $credito -= $valorPrestMensal;
            $planoPrestacoes[$i][0] = $dt;
            $planoPrestacoes[$i][1] = $valorPrestMensal;
            $planoPrestacoes[$i][2] = $credito;

                if($i==0){
                    $planoPrestacoes[$i][1] = round(val: $credito+$despesa, 2)
                }else{
                    $planoPrestacoes[$i][1] =
                }
        }

        //var_dump($planoPrestacoes);


?>

    <h1>Plano de Pagamentos</h1>
    <h4> Valor a Contrair:€ <?= number_format($credito, 2); ?></h4>
    <h4> Numero de Prestacoes: <?= $numPrest; ?></h4>
    <h4> Data Emprestimo: <?= Carbon::now(); ?></h4>


        <table border="1">
            <tr style="background-color: blue;">
            <th>Nº Prestação</th>
            <th>Data</th>
            <th>Valor Mensal</th>
            <th>Valor em Divida</th>
            </tr>

            <?php
            //contar colunas e linhas

            $rows = count($planoPrestacoes); //6
            $cols = Count ($planoPrestacoes[0]);


            //for para as linhas
            for ($i = 0; $i<$rows; $i++){
                    //for para as colunas
                echo "<tr>";
                $numDaPrestacao = $i + 1;

                echo "<td style='background-color: blue'>". $numDaPrestacao . "</td>";


                for ($i = 0; $j<$cols; $j++){
                    echo "<td>".$planoPrestacoes[$i][$j]."</td>"

                }
                echo "</tr>";
                }
            ?>

        </table>

</body>
</html>