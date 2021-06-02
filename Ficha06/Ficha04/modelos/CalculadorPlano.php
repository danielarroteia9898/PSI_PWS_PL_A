<?php
require 'vendor/autoload.php';
use Carbon\Carbon;

    class CalculadorPlano
    {
        //método
        public function calculaPlano($credito, $numPrest, $despesa)
        {

            $valorPrestMon = $credito / $numPrest;


            for ($i = 0; $i < $numPrest; $i++) {
                $dataInicial = Carbon::now();

                $dt = $dataInicial->addMonth($i);
                $credito -= $valorPrestMon;
                //$credito = $credito - $valorPrestMon;

                //criação da matriz
                $planPrestacoes[$i][0] = $dt->format('Y-m-d');

                //codigo novo da despesa - ultima alinea
                if ($i == 0) {
                    $planPrestacoes[$i][1] = round($valorPrestMon, 2) + $despesa;
                } else {
                    $planPrestacoes[$i][1] = round($valorPrestMon, 2);
                }
                //$planPrestacoes[$i][1] = round($valorPrestMon, 2);


                $planPrestacoes[$i][2] = round($credito, 2);
            }

            return $planPrestacoes;
        }


    }


?>
