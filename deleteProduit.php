<?php
    require_once('produitClass.php');   //require    //include
    
    $prd = new Produit(); //Instantiation

    $prd->setReference($_GET['ref']); //Appel du setter de la reference

    $prd->delete(); //Appel de la methode delete
    header('Location: /gestion-stock/index.php');    
?>