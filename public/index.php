<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/CSS/MainHuds.css">
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
      <li><a href="#tab1"> <span>STAT</span>  </a></li>
      <li><a href="#tab2"> <span>INV</span>   </a></li>
      <li><a href="#tab3"> <span>DATA</span>  </a></li>
      <li><a href="#tab4"> <span>MAP</span>   </a></li>
      <li><a href="#tab5"> <span>RADIO</span> </a></li>
     <ul>

    </header>
    <br>
    <br>
 <div class="secciones"> 
    <article id="tab1">
       <?php
          require('Controller/C_verItems.php');
        ?>
    </article>
    <article id ="tab2">
        <p style="color:white">aaaaaaaaaa</p>
    </article>
 </div> 
</body>
</html>

