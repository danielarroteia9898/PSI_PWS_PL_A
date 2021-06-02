<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plano de pagamentos</title>
</head>

<body>

    <?php
        //definição de var
        //data com a utilização do carbon, instalado através do composer
        require 'vendor/autoload.php';
        use Carbon\Carbon;

        $credito = 1000;
        $numPrest = 6;

        $despesa = 10;

        //$dataInicial = Carbon::now(); //data com a data de hj codigo no site

        $valorPrestMon = $credito / $numPrest;

    ?>

    <h1>Plano de Pagamentos</h1>

    <h4>Valor a contrair: € <?php
        echo number_format($credito,2); //numner_format = round
        ?> </h4>
    <h4>Numero de Prestações: <?php
        echo $numPrest;
        ?> </h4>
    <h4>Data do empréstimo:  <?php
        echo Carbon::now();
        ?> </h4>


    <?php
        for( $i =0; $i < $numPrest; $i++)
        {
            $dataInicial = Carbon::now();

            $dt = $dataInicial -> addMonth($i);
            $credito -= $valorPrestMon;
            //$credito = $credito - $valorPrestMon;

            //criação da matriz
            $planPrestacoes[$i][0] = $dt -> format('Y-m-d');

            //codigo novo da despesa - ultima alinea
            if( $i == 0)
            {
                $planPrestacoes[$i][1] = round($valorPrestMon, 2) + $despesa;
            }else{
                $planPrestacoes[$i][1] = round($valorPrestMon, 2);
            }
            //$planPrestacoes[$i][1] = round($valorPrestMon, 2);


            $planPrestacoes[$i][2] = round($credito, 2);
        }

        //var_dump($planPrestacoes); = console.log

    ?>

    <table border = "1">
        <tr style="background-color: darkolivegreen">
            <th>Nº Prest</th>
            <th>Data</th>
            <th>Valor Mensal</th>
            <th>Valor em Divida</th>
        </tr>

        <?php
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
    </table>

    <p> O valor da despesa do credito e de <?php
        echo $despesa;
        ?> € e encontra-se na primeria prestação (<?php echo
        Carbon::now() ->format('Y-m-d');
        ?> ) . </p>

</body>

</html>
