<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
    <?php
        $nomes = array('Jose', 'Manuel', 'Aires');
        /* equivalente a..
         * nome[0] = 'Jose';
         * nome[1] = 'Manuel';
         * nome[2] = 'Aires';
         */

    ?>
    <select>

    <?php
        foreach ($nomes as $nome) //a var nome não é preciso declarar é automático
        {
            //echo "<option value=\" $nome \"> $nome</option>";
            echo "<option value=". $nome ."> $nome</option>";
        }
    ?>
    </select>

<body>

</body>

</html>
