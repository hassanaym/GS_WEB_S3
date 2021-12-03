<?php
    require_once('contactClasse.php');   //require    //include
    
    if(isset($_POST['update-contact'])){

        $cnt = new Contact(); //Instantiation  //Appel d'un constructeur

        
        $cnt->setNom($_POST['nom']); //Appel du setter du nom
        $cnt->setTitre($_POST['titre']); //Appel du setter du titre
        $cnt->setMessage($_POST['message']); //Appel du setter du message
        $cnt->setEmail($_GET['email']); //Appel du setter du email
        

        $cnt->update(); //Appel de la methode save

        header('Location: /contact-page/listContacts.php');    

    }

?>