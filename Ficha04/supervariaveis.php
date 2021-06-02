<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>

<body>

    <?php
        echo $_SERVER['SCRIPT_NAME'] . "<br>";
    ?>

    <?php
    echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
    ?>

    <?php
    echo $_SERVER['SERVER_NAME'] . "<br>";
    ?>

    <?php
    echo $_SERVER['REQUEST_METHOD'] . "<br>"; //na pag é GET por definição
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
    //só faz o código dentro do if qd o método é post ou seja, qd há um input
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
            echo "Name is empty";
            } else {
            echo $name;
            }
        }
    ?>
</body>

</html>