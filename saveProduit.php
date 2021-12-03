<?php
    require_once('ProduitClass.php');   //require    //include
    
    if(isset($_POST['save-produit'])){
        $prd = new Produit(); //Instantiation  //Appel d'un constructeur

        $prd->setReference($_POST['reference']); //Appel du setter du nom
        $prd->setLibelle($_POST['libelle']); //Appel du setter du titre
        $prd->setQuantiteStock($_POST['quantite-stock']); //Appel du setter du message
        $prd->setPrixAchat($_POST['prix-achat']); //Appel du setter du email
        $prd->setPrixUnitaire($_POST['prix-unitaire']); //Appel du setter du email
        $prd->setPrixVente($_POST['prix-vente']); //Appel du setter du email

        $prd->save(); //Appel de la methode save
        header('Location: listProduit.php');    
    }

?>