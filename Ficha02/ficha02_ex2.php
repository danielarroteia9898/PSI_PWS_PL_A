<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <?php
        $varString = "Variaveis PHP";
        $varInteiro = 64;
        $varFloat = 12.5;
        $varBoolean = true;

        echo  "<p>A variavel " . '$varString' . " é do tipo <b>string</b>" . " e tem o valor ". $varString. "</p>";
        //echo "A variavel" . '$varInteiro' . "é do tipo <b>".gettype($varInteiro)."</b> . "e tem o valor". $varInteiro;
        echo  "<p>A variavel " . '$varInteiro' . " é do tipo <b>".gettype($varInteiro)."</b>" . " e tem o valor ". $varInteiro. "</p>";
        echo  "<p>A variavel " . '$varFloat' . " é do tipo <b>".gettype($varFloat)."</b>" . " e tem o valor ". $varFloat. "</p>";
        echo  "<p>A variavel " . '$varBoolean' . " é do tipo <b>".gettype($varBoolean)."</b>" . " e tem o valor ". $varBoolean. "</p>";

    ?>
</body>

</html>
