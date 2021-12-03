<?php
require_once ('contactClasse.php');
$cnt = new Contact();

$cnt=$cnt->nombreTotal();
?>

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
<div class="container">
        <div class="info-side">
            <div class="header">
               <p>le nomvre total est : <?php echo $cnt->nbr?></p>

            </div>
            
            <h1>Contact page</h1>

            

            <footer>
                xyxyxyxyxyxyxyxy © 2021
            </footer>
            
        </div>
       
    </div>
</body>
</html>