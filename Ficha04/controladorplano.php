

    <?php
        //definição de var
        //data com a utilização do carbon, instalado através do composer

        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            include_once "VISTAS/vistaform.php";
        }else
            {
                $credito = $_POST['credito'] ;
                $numPrest =  $_POST['numPrestacoes'];
                $despesa = 10;
                include_once "modelos/modeloPlano.php"; //chamar o ficheiro

                $planPrestacoes = calculaPlano($credito, $numPrest, $despesa); //para aceder à função


                include_once "VISTAS/vistaplano.php"; //chamar o ficheiro
            }

        //$credito = 1000;
        //$numPrest = 6;

        //$dataInicial = Carbon::now(); //data com a data de hj codigo no site

    ?>



