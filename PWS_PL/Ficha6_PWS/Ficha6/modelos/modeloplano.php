<?php

    require 'vendor/autoload.php';
    use Carbon\Carbon;

    function calculaPlano($credito, $numPrest, $despesa){

        $valorPrestMensal = $credito / $numPrest;

        for($i=0; $i<$numPrest; $i++){
            $dataInicial = Carbon::now();
            $credito -= $valorPrestMensal;
            $dt = $dataInicial->addMonths($i);
            //$credito = $credito - $valorPrestMensal;
            $planoPrestacoes[$i][0] = $dt;
            if($i==0){
                $planoPrestacoes[$i][1] = $valorPrestMensal+$despesa;
            } else {
                $planoPrestacoes[$i][1] = $valorPrestMensal;
            }
            $planoPrestacoes[$i][2] = round($credito, 2);
        }

        return $planoPrestacoes;
    }
