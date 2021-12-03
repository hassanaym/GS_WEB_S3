<?php
    require_once('ProduitClass.php');

    $prd = new Produit();
    $lst = $prd->getAll(); //Array
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
                foreach ($lst as $p)  {
                    echo "<tr>";
                        echo "<td>" . $p->reference . "</td>";
                        echo "<td>" . $p->libelle . "</td>";
                        echo "<td>" . $p->quantite_stock . "</td>";
                        echo "<td>" . $p->prix_achat . "</td>";
                        echo "<td>" . $p->prix_unitaire. "</td>";
                        echo "<td>" . $p->prix_vente . "</td>";
                        echo "<td><a href="."deleteProduit.php/?ref=" . $p->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                        echo "<td><a href="."updateForm.php/?ref=" . $p->reference . "><i class='fas fa-edit'></i></a></td>";
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

