<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        <?php include "assets/CSS/MainHuds.css" ?>
        <?php include "assets/CSS/StatusHuds.css" ?>
    </style>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"> </script>

    <script src="assets/JS/Mains.js"></script>
    <title>Fallout HUD</title>
</head>
<body>
    
    <header>

    <ul class="tabs">
      <li><a href="#STAT"> <b><span>STAT</span> </b>  </a></li>
      <li><a href="#INV"> <b><span>INV</span>  </b>  </a></li>
      <li><a href="#DATA"> <b><span>DATA</span> </b> </a></li>
      <li><a href="#MAP"> <b><span>MAP</span>  </b>  </a></li>
      <li><a href="#RADIO"> <b><span>RADIO</span></b> </b></a></li>
     <ul>

    </header>
    <br>
    <br>
 <div class="secciones">
    
    <article id ="STAT">
        <p style="color:white">aaaaaaaaaa</p>
    </article>
    
    <article id="INV">
       <?php
          require('Controller/C_verItems.php');
        ?>
    </article>
   
 </div> 
</body>
</html>

