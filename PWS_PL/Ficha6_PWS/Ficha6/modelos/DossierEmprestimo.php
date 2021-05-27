<?php

class DossierEmprestimo
{
        public $data, $nome;
        public $credito;
        public $numPrestacoes;
        public $planoPagamentos;

    /**
     * DossierEmprestimo constructor.
     * @param $data
     * @param $nome
     * @param $credito
     * @param $numPrestacoes
     * @param $planoPagamentos
     */
    public function __construct($data, $nome, $credito, $numPrestacoes, $planoPagamentos)
    {
        $this->data = $data;
        $this->nome = $nome;
        $this->credito = $credito;
        $this->numPrestacoes = $numPrestacoes;
        $this->planoPagamentos = $planoPagamentos;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }




}