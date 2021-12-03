<?php
require_once ('contactClasse.php');

$cnt = new Contact;

$cnt->setEmail($_GET['email']);

$cnt= $cnt->getOne();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Mettre à jour un contact</title>
</head>
<body>
<div class="container">
        <div class="info-side">
            <div class="header">
               
            </div>
            
            <h1>Contact page</h1>

            

            <footer>
                xyxyxyxyxyxyxyxy © 2021
            </footer>
            
        </div>
        <div class="data-input-side">
           
            <form action=<?php echo"/contact-page/updateContact.php/?email=". $cnt->email?> method="POST">
                <input type="text" class="input-border" name="nom" id="nom" placeholder="Nom" value=<?php echo $cnt->nom?>>
                <input type="text" class="input-border" name="email" id="email" placeholder="Email" value=<?php echo $cnt->email?> disabled>
                <input type="text" class="input-border" name="titre" id="titre" placeholder="Titre" value=<?php echo $cnt->titre?>>
                <textarea  class="input-border" name="message" id="message" placeholder="Message" rows="5"><?php echo $cnt->message?></textarea >
                <input type="submit" name="update-contact" value="Mettre à jour">
            </form>
        </div>
    </div>
</body>
</html>