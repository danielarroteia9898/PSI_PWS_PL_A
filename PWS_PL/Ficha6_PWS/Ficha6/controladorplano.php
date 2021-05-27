    <?php

        require 'vendor/autoload.php';
        use Carbon\Carbon;


        session_start();

        if($_SERVER['REQUEST_METHOD']=='GET'){ //se for GET
            include_once 'vistas/formdossier.php';
        } else { //se for POST
            $credito = $_POST['credito'];
            $numPrest = $_POST['numPrestacoes'];
            $nome = $_POST['nome'];
            $despesa = 10;


            include_once "modelos/CalculadoraPlano.php";
            include_once "modelos/DossierEmprestimo.php";

            $dossier = new DossierEmprestimo(Carbon::now(), $nome, $credito, $numPrest, null);


            $calculadora = new CalculadoraPlano();
            $planoPrestacoes = $calculadora->calculaPlano($credito, $numPrest, $despesa);

            $_SESSION['planoPrestacoes'] = $planoPrestacoes;

            $dossier->planoPagamentos = $planoPrestacoes;

            include_once "vistas/vistadossier.php";
        }



        ?>

