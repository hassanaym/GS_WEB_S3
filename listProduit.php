<?php
    require_once('ProduitClass.php');

    $cnt = new Produit();
    $lst = $cnt->getAll(); //Array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/main.css">
    <title>Produit</title>
</head>
<body>
    <div class="container">
    <table>
        <thead>
            <tr>
                <th>Référence</th>
                <th>Libellé</th>
                <th>Quantité</th>
                <th>P.achat</th>
                <th>P.vente</th>
                <th>P.unitaire</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($lst as $c)  {
                    echo "<tr>";
                        echo "<td>" . $c->reference . "</td>";
                        echo "<td>" . $c->libelle . "</td>";
                        echo "<td>" . $c->quantite_stock . "</td>";
                        echo "<td>" . $c->prix_achat . "</td>";
                        echo "<td>" . $c->prix_unitaire. "</td>";
                        echo "<td>" . $c->prix_vente . "</td>";
                        echo "<td><a href="."deleteProduit.php/?ref=" . $c->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                        echo "<td><a href="."updateForm.php/?ref=" . $c->reference . "><i class='fas fa-edit'></i></a></td>";
                        //echo "<td><a href="."updateForm.php/?email=" . $c->reference . "><i class='fas fa-reply'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <div class="table-footer">
    <a href="addProduit.php">Add</a>
    <a href="addProduit.php">Show all</a>
    </div>
    
    </div>
    
</body>
</html>

