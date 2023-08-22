<body>
    
     <ul class="internal">
         <li><a href="#WEAPONS"> <span>WEAPONS</span> </a></li>
         <li><a href="#APPAREL"> <span>APPAREL</span> </a></li>
         <li><a href="#AID">     <span>AID</span>     </a></li>
         <li><a href="#MISC">    <span>MISC</span>    </a></li>
         <li><a href="#JUNK">    <span>JUNK</span>    </a></li>
         <li><a href="#MODS">    <span>MODS</span>    </a></li>
         <li><a href="#AMMO">    <span>AMMO</span>    </a></li>
     <ul>


    <div class="ItemSeccion">
      <article id="WEAPONS">
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