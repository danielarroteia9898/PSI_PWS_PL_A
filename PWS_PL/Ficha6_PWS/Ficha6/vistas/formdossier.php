<html>
<head>
    <title>Vista Form Plano Prestações</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Credito: <input type="text" name="credito"></p>
        <p>Número de Prestações: <input type="text" name="numPrestacoes"</p>
        <button type="submit">Criar Plano</button>
    </form>

    <?php
        if(isset($_SESSION['planoPrestacoes'])) {

            ?>

            <table border="1">

                <tr style="background-color: blue;">
                    <th>Nº Prest</th>
                    <th>Data</th>
                    <th>Valor Mensal</th>
                    <th>Valor em Dívida</th>
                </tr>
                <?php
                $planoPrestacoes = $_SESSION['planoPrestacoes'];
                $rows = count($planoPrestacoes); //6
                $cols = count($planoPrestacoes[0]); //3
                //for para as linhas
                for ($i = 0; $i < $rows; $i++) {
                    echo "<tr>";
                    $numDaPrestacao = $i + 1;
                    echo "<td style='background-color: blue'>" . $numDaPrestacao . "</td>";
                    //for para as colunas
                    for ($j = 0; $j < $cols; $j++) {
                        echo "<td>" . $planoPrestacoes[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }

                ?>
            </table>

        <?php
        }
        ?>


</body>
</html>