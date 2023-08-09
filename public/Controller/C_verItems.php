<?php

    require('Model/Conex.php');

    $con = new conexion();

    $items = $con->getItems();
    

    require('View/V_verItems.php');
?>