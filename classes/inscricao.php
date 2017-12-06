<?php

 include_once('db/conexao.php');
 class inscricao {
     public $nome;
     public $email;
     public $tppessoa;
     public $empresa;
     public $segmento;
     public $ip;
     public $data;

/*
INS_CODIGO,
INS_NOME,
INS_EMAIL,
INS_IP,
INS_DATA,
INS_EMPRESA,
INS_SEGMENTO,
INS_TPPESSOA
*/

     function __construct($vNome, $vEmail, $vTpPessoa, $vEmpresa, $vSegmento, $vIp, $vData) {

        $this->nome = $vNome;
        $this->email = $vEmail;
        $this->tppessoa = $vTpPessoa;
        $this->empresa = $vEmpresa;
        $this->segmento = $vSegmento;
        $this->ip = $vIp;
        $this->data = $vData;
        
     }

    function setNome($valor) {
         $this->nome = $valor;
     }

    function getNome() {
        echo"$this->nome";
    }

    function setEmail($valor) {
         $this->email = $valor;
     }

    function getEmail() {
        echo"$this->email";
    }

    function setTpPessoa($valor) {
         $this->tppessoa = $valor;
     }

    function getTpPessoa() {
        echo"$this->tppessoa";
    }

    function setEmpresa($valor) {
         $this->empresa = $valor;
     }

    function getEmpresa() {
        echo"$this->empresa";
    }

    function setSegmento($valor) {
         $this->segmento = $valor;
     }

    function getSegmento() {
        echo"$this->segmento";
    }

    function setIp($valor) {
         $this->ip = $valor;
     }

    function getIp() {
        echo"$this->ip";
    }

    function setData($valor) {
         $this->data = $valor;
     }

    function getData() {
        echo"$this->data";
    }

 }

 ?>