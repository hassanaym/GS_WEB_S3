<?php
require_once('Classes.php');   //require    //include

if (isset($_POST['save-product'])) {
    $prd = new Product(); //Instantiation  //Appel d'un constructeur

    $prd->setReference($_POST['reference']); //Appel du setter du nom
    $prd->setDescription($_POST['description']); //Appel du setter du titre
    $prd->setQuantiteStock($_POST['quantite-stock']); //Appel du setter du message
    $prd->setPrixAchat($_POST['prix-achat']); //Appel du setter du email
    $prd->setMarque($_POST['marque']); //Appel du setter du email
    $prd->setPrixVente($_POST['prix-vente']); //Appel du setter du email
    $prd->save(); //Appel de la methode save
    header('Location: products.php');
}
