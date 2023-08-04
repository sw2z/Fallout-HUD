<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Items</title>
</head>
<body>

    <table>
        <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Tipo</td>
                </tr>
        </thead>


        <tbody>
            <?php

                foreach($items as $item){
                        
                    echo "<tr>";
                    echo "<td>". $item['ID_item'] ."</td>";
                    echo "<td>". $item['Nombre'] ."</td>";
                    echo "<td>". $item['Tipo'] ."</td>";
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>

</body>
</html>