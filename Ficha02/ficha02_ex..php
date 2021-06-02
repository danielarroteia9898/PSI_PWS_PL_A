<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $num1 = 10;
        $num2 = 5;

        $soma = $num1 + $num2;
        $multiplicacao = $num1 * $num2;
        $subtrair = $num1 - $num2;
        $divisao = $num1 / $num2;

        //echo '$num1('.$num1.') + $num2('.$num2.') = '.$soma;

        echo '<p> $num1('.$num1.') + $num2('.$num2.') = '.$soma.'</p>';
        echo '<p> $num1('.$num1.') * $num2('.$num2.') = '.$multiplicacao. '</p>';
        echo '<p>$num1('.$num1.') - $num2('.$num2.') = '.$subtrair.'</p>';
        echo '<p>$num1('.$num1.') / $num2('.$num2.') = '.$divisao.'</p>';


    ?>

</body>

</html>
