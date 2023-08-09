<?php

  class conexion{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli("localhost","root","","fallout_hud");
    }

    public function getItems(){
        $query = $this->con->query('SELECT * FROM items');

        $retorno = [];

        $i=0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }

  }

?>