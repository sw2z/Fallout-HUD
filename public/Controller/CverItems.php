<?php

    require ('Model/Conexion.php');

    $con = new Conexion();

    $items = $con->getItems();
    

    require('View/V_verItems.php');
?>