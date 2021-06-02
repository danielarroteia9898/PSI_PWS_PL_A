<?php
    session_start(); //para inicializar a sessão

    if(!(isset($_SESSION['numeroAleatorio']))) //negação
    {
        //só vai para este código qd a var numeroAle não está definido
        $valorGerado = rand(0, 100);

        $_SESSION['numeroAleatorio'] = $valorGerado; //colocação da var na sessão
    }
    $numUser = $_POST['numero']; //para ir buscar o valor do input

    if ($numUser == $_SESSION['numeroAleatorio'])
    {
        echo '<p>Acertou! Parabéns</p>';
        session_destroy();
    } else if ($numUser < $_SESSION['numeroAleatorio'])
    {
        echo '<p>O seu numero é inferior</p>';
    }else
    {
        echo '<p>O seu numero é superior</p>';
    }

    var_dump($_SESSION['numeroAleatorio']);

?>
