<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <?php
        $vetorAssociativo = array ("PT" => "Portugal", "GB" => "Great Britsin",
            "ES" => "Spain", "Fr" => "France");

    ?>

    <ul>
            <?php
                foreach ($vetorAssociativo as $Key => $value)
                {
                    echo "<li>".$value."($Key)</li>";
                    // echo "<li> $value ($Key)</li>"
                }
            ?>

    </ul>

</body>

</html>
