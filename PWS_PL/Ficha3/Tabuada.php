<html>
<head>
    <title>Tabuada</title>
</head>
<body>

<?php
$rows=10;
$cols=10;
//linhas
for($i=1; $i<=$rows; $i++){
    //colunas
    for($j=1;$j<=$cols; $j++){
        $tabuada[$i][$j] = $i*$j;
    }
}
//var_dump($tabuada)
?>

<table border="1">
    <?php
    $rowsMatriz = count($tabuada);
    $colsMatriz = count($tabuada[1]);
    for($i=0; $i<=$rowsMatriz; $i++){
        echo "<tr>";
        echo "<th>".$i."</th>";
        for($j=1; $j<=$colsMatriz; $j++){
            if($i===$j){
                echo "<td style='background-color: #0a73bb'>" . $tabuada[$i][$j] . "</td>";
            } else if($i===0){
                echo "<th>".$j."</th>";
            } else {
                echo "<td>" . $tabuada[$i][$j] . "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>


</body>
</html>