<?php
function apresentarTab( $rows, $cols)
{

    for ($i = 1; $i <= $rows; $i++) // linhas
    {
        for ($j = 1; $j <= $cols; $j++) // colunas
        {
            $tabuada[$i][$j] = $i * $j;
        }
    }
    return $tabuada;
}
//var_dump($tabuada);
?>
