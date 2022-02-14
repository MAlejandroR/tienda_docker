<?php

class DB extends  mysqli
{
    protected $mi_error;


    public function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            parent::__construct(Constantes::HOST, Constantes::USER, Constantes::PASS, Constantes::DATABASE);
        }catch (Exception $e){
            var_dump($this);
            die("Error conectando ".$this->connect_error);
        }
//          $this->mi_error = $this->connect_errno==0 ? $this->connect_error :: null;

    }

    public function get_error(){
        return "$this->error";
    }

    public function valida_usuario($nombre, $pass){

    }
    public function ejecuta_sentencia(){

    }

}