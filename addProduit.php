<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact page</title>
</head>
<body>
    <div class="input-container">
        <div class="info-side">
            <div class="header">
               
            </div>
            
            <h1>Ajout d'un produit </h1>

            <footer>
                Est gi Web © 2021
            </footer>            
        </div>

        <div class="data-input-side">
            <form action="saveProduit.php" method="POST">
                <input type="text" class="input-border" name="reference" id="reference" placeholder="Référence" required>
                <textarea  class="input-border" name="libelle" id="libelle" placeholder="Libellé" rows="5"></textarea >
                <input type="number" step="any" class="input-border" name="quantite-stock" id="quantite-stock" placeholder="Quantité en stock">
                <input type="number" step="any" class="input-border" name="prix-achat" id="prix-achat" placeholder="Prix d'achat">
                <input type="number" step="any" class="input-border" name="prix-unitaire" id="prix-unitaire" placeholder="Prix unitaire">
                <input type="number" step="any" class="input-border" name="prix-vente" id="prix-vente" placeholder="Prix de vente">
                <input type="submit" name="save-produit" value="Enregistrer">
            </form>
        </div>
        </div>
</body>
</html>