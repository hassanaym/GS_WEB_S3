<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>New product</title>
</head>

<body>

    <div class="data-input-side">
        <form action="saveProduct.php" method="POST">
            <input type="text" class="input-border" name="reference" id="reference" placeholder="Référence" required>
            <textarea class="input-border" name="description" id="description" placeholder="Libellé" rows="5"></textarea>
            <input type="number" step="any" class="input-border" name="quantite-stock" id="quantite-stock" placeholder="Quantité en stock">
            <input type="number" step="any" class="input-border" name="prix-achat" id="prix-achat" placeholder="Prix d'achat">
            <input type="text" class="input-border" name="marque" id="marque" placeholder="Marque">
            <input type="number" step="any" class="input-border" name="prix-vente" id="prix-vente" placeholder="Prix de vente">
            <input type="submit" name="save-product" value="Save">
        </form>
    </div>

</body>

</html>