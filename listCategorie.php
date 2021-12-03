<?php
    require_once('categorieClass.php');

    $cat = new Categorie();

    $lst = $cat->getAll(); //Array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/main.css">
    <title>Catégorie</title>
</head>
<body>
    <table>

        <thead>
            <tr>
                <th>Référence</th>
                <th>Description</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($lst as $c)  {
                    echo "<tr>";
                        echo "<td>" . $c->reference . "</td>";
                        echo "<td>" . $c->description . "</td>";
                        echo "<td><a href="."deleteContact.php/?email=" . $c->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                        echo "<td><a href="."deleteContact.php/?email=" . $c->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                        echo "<td><a href="."deleteContact.php/?email=" . $c->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>

    </table>

    <a href="index.php">Add</a>
</body>
</html>