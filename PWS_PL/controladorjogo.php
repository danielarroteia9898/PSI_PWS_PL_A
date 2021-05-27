<?php
    session_start();

    if (!(isset($_SESSION['numeroAleatorio']))) {


        $valorGerado = rand(0, 100);
        $_SESSION['numeroAleatorio'] = $valorGerado;
    }

    $numUser = $_POST['numero'];
    if ($numUser == $valorGerado){

        echo '<p>Acertou! </p>';
        session_destroy();
    }else if ($numUser < $ValorGerado){

        echo '<p>O seu nr é inferior ao gerado</p>';
    }else {

        echo '<p>O seu numero é superior ao gerado</p>';

    }
        var_dump(($_SESSION["numeroAleatorio"]);
?>
