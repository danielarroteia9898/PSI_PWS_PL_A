<html>

<head>
    <title>Ficha 3</title>
</head>


    <body>
        <?php
            $nomes = array ('José', 'Manuel', 'Aires');
?>

        <select>
        <?php
        foreach ($nomes as $nome){
                echo "<option value=\"  $nome \">$nome</option>";
                echo 
            }

        ?>

        </select>
    </body>

</html>