

    <?php

    require 'vendor/autoload.php';
    use Carbon\Carbon;

        //definição de var
        //data com a utilização do carbon, instalado através do composer

        session_start();

        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            include_once "VISTAS/formdossier.php";
        }else
            {
                $nome = $_POST['nome'];
                $credito = $_POST['credito'] ;
                $numPrest =  $_POST['numPrestacoes'];
                $despesa = 10;
                include_once "modelos/CalculadorPlano.php"; //chamar o ficheiro

                //codigo novo com a classe
                include_once "modelos/DossierEmprestimo.php";

                $dossier = new DossierEmprestimo(Carbon::now(), $nome, $credito, $numPrest, null);

                //chamada da classe
                $calculadora = new CalculadorPlano();
                //chamada do metodo
                $planPrestacoes = $calculadora->calculaPlano($credito, $numPrest, $despesa);

                //ex.6
                $_SESSION['planPrestacoes'] = $planPrestacoes;

                //atribuição de var ao plano prestacoes
                $dossier->planoPagamentos = $planPrestacoes;
                //$planPrestacoes = calculaPlano($credito, $numPrest, $despesa); //para aceder à função


                include_once "VISTAS/vistadossier.php"; //chamar o ficheiro
            }

        //$credito = 1000;
        //$numPrest = 6;

        //$dataInicial = Carbon::now(); //data com a data de hj codigo no site

    ?>



