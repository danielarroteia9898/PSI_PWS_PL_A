<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
        $capitulo1 = 'Capitulo 1';
        $capitulo2 = 'Capitulo 2';
        $capitulo3 = 'Capitulo 3';
        $capitulo4 = 'Capitulo 4';
        $capitulo5 = 'Capitulo 5';

        $indice = 'Indique';
        $versao = 1.0;

        echo "<h2>$indice</h2>";
        //<h2> <?php echo $indice; e fechar as tags - mas dentro do html e fora do php

        echo "<h5>$versao</h5>";

    ?>

    <ul>
        <li> <a href="capitulos/capitulo1.php?versaoDoc=<?php echo $versao;
?>&nomeCapitulo=<?= $capitulo1; ?>"> <?php echo
            $capitulo1;
                ?> </a> </li>
        <li> <a href="capitulos/capitulo2.php" > <?php echo
            $capitulo2;
            ?> </a> </li>
        <li> <a href="capitulos/capitulo3.php" > <?php echo
            $capitulo3;
            ?> </a> </li>
        <li> <a href="capitulos/capitulo4.php" > <?php echo
            $capitulo4;
            ?> </a> </li>
        <li> <a href="capitulos/capitulo5.php" > <?php echo
            $capitulo5;
            ?> </a> </li>
    </ul>


</body>

</html>
