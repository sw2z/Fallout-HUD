<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <thead>
                <tr>
                    <td>Items</td>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Tipo</td>
                </tr>
        </thead>


        <tbody>
            <?php

                foreach($items as $item){
                        
                    echo "<tr>";
                    echo "<td>". $item ['ID_item'] ."</td>";
                    echo "<td>". $item ['Nombre'] ."</td>";
                    echo "<td>". $item ['Tipo'] ."</td>";
                    echo "</tr>";
                }

            ?>
        </tbody>

</body>
</html>