<?php
require_once('Classes.php');

$prd = new Product();
$lst = $prd->getAll(); //Array
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css">
    <title>List of products</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="nav-content d-flex flex-row justify-content-between">
                <div class="nav-content-right-side d-flex flex-row justify-content-between">
                    <a class="navbar-brand" href="dashboard.php">sm-S</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="new-product.php">New <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="Products.php">Miniature <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="nav-icons">
                    <i class="fas fa-arrow-circle-left"></i>
                    <a href="dashBoard.php"><i class="fas fa-home"></i></a>
                    <a href="index.php"><i class="fas fa-sign-out-alt"></i></a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Libellé</th>
                    <th>Quantité</th>
                    <th>P.achat</th>
                    <th>P.vente</th>
                    <th>Marque</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lst as $p) {
                    echo "<tr>";
                    echo "<td>" . $p->reference . "</td>";
                    echo "<td>" . $p->description . "</td>";
                    echo "<td>" . $p->quantite_stock . "</td>";
                    echo "<td>" . $p->prix_achat . "</td>";
                    echo "<td>" . $p->prix_vente . "</td>";
                    echo "<td>" . $p->marque . "</td>";
                    echo "<td><a href=" . "deleteProduit.php/?ref=" . $p->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                    echo "<td><a href=" . "updateForm.php/?ref=" . $p->reference . "><i class='fas fa-edit'></i></a></td>";
                    //echo "<td><a href="."updateForm.php/?email=" . $c->reference . "><i class='fas fa-reply'></i></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="table-footer">
            <a href="new-product.php">Add</a>
            <a href="#">Show all</a>
        </div>

    </div>

</body>

</html>