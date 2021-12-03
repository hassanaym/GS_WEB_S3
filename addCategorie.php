<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ajouter catégorie</title>
</head>
<body>
<div class="container">
        <div class="info-side">
            <div class="header">
               
            </div>
            
            <h1>Les catégories</h1>

            <footer>
                Est gi Web © 2021
            </footer>
            
        </div>
        <div class="data-input-side">
           
            <form action="saveCategorie.php" method="POST">
                <input type="text" class="input-border" name="reference" id="reference" placeholder="Référence">
                <textarea  class="input-border" name="description" id="description" placeholder="Description" rows="5"></textarea >
                
                <input type="submit" name="save-categorie" value="Enregistrer">
            </form>
        </div>
    </div>
</body>
</html>