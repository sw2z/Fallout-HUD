<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="View/CSS/MainHud.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Fallout HUD</title>
</head>
<body>
    <header>
        <td> <a href="#" class="upHeader">Stats</a> </td>
        <td> <a href="#" class="upHeader">Inv</a> </td>
        <td> <a href="#" class="upHeader">Data</a> </td>
        <td> <a href="#" class="upHeader">Map</a> </td>
        <td> <a href="#" class="upHeader">Radio</a> </td>

    </header>
<div class="inventory-view-view">
<?php
require('Controller/C_verItems.php');
?>
 </div>   
</body>
</html>

