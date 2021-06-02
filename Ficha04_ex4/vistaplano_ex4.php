<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>

<body>


<table border="1">
    <?php

    $rowsMatriz = count($tabuada);
    $colsMatriz = count($tabuada[1]);

    for ($i = 0; $i <= $rowsMatriz ;$i++)
    {
        echo "<tr>";
        echo "<td>" . $i . "</td>"; //primeira linha

        for ($j =1; $j <= $colsMatriz ; $j++) // colunas
        {
            if ($i === $j)
            {
                echo "<td style='background-color: darkolivegreen'>" . $tabuada[$i][$j] . "</td>";
            }else if ($i === 0)
            {
                echo "<th>" . $j . "</th>";
            }else {
                echo "<td>" . $tabuada[$i][$j] . "</td>";
            }
        }

        echo "</tr>";
    }
    ?>

</table>
</body>

</html>
