<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Items</title>
</head>
<body>
<div class="container-List">
<div class="containerStatus">


    <ul class="Internal-Tab-Status">
      <li><a href="#WEAPONS"> <span>WEAPONS</span> </a></li>
      <li><a href="#APPAREL"> <span>APPAREL</span> </a></li>
      <li><a href="#AID">     <span>AID</span>     </a></li>
      <li><a href="#MISC">    <span>MISC</span>    </a></li>
      <li><a href="#JUNK">    <span>JUNK</span>    </a></li>
      <li><a href="#MODS">    <span>MODS</span>    </a></li>
      <li><a href="#AMMO">    <span>AMMO</span>    </a></li>
    <ul>
</div>

<div class="Items-seccion">
    <article >
       <table>
         <tbody>
            <?php
                foreach ($items as $item){
                    echo "<tr>";
                    echo "<td> <a href =''>". $item['Nombre'] ."</a></td>";
                    echo "</tr>";
                }
            ?>
          </tbody>
       </table>
    </article>
</div>
</div>
</body>
</html>