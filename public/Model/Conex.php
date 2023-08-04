<?php

  class Conexion{

    private $con;

    public function __contruct()
    {
        $this->con = new mysqli ('localhost','root','Fallout-hud');
    }

    public function getItems(){
        $this->con->query('SELECT * FROM items ');

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