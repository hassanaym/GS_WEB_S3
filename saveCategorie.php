<?php
    require_once('categorieClass.php');   //require    //include
    
    if(isset($_POST['save-categorie'])){
        $cat = new Categorie(); //Instantiation  //Appel d'un constructeur

        $cat->setReference($_POST['reference']); //Appel du setter du nom
        $cat->setDescription($_POST['description']); //Appel du setter du titre

        $cat->save(); //Appel de la methode save
        echo'ana hna';
        header('Location: listCategorie.php');    
    }

?>