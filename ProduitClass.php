<?php
require_once('dbaccess.php');

class Produit{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_reference;
    private  $_libelle;
    private  $_quantiteStock;
    private  $_prixAchat;
    private  $_prixUnitaire;
    private  $_prixVente;
    private  $_dba; //Connection à la base de données

    //Constructeur   //Surcharge = Overloading
    public function __construct(){   //implicite explicite

    }
   
    //Methodes   //Interfaces
    //Setters and getters
    public function getReference(){
        return $this->_reference;
    }

    public function setReference($reference){
        $this->_reference = $reference;
    }

    public function getLibelle(){
        return $this->_libelle;
    }

    public function setLibelle($libelle){
        $this->_libelle = $libelle;
    }

    public function getQuantiteStock(){
        return $this->_quantiteStock;
    }

    public function setQuantiteStock($quantiteStock){
        $this->_quantiteStock = $quantiteStock;
    }
    
    public function getPrixAchat(){
        return $this->_prixAchat ;
    }

    public function setPrixAchat($prixAchat){
        $this->_prixAchat = $prixAchat;
    }

    public function getPrixUnitaire(){
        return $this->_prixUnitaire ;
    }

    public function setPrixUnitaire($prixUnitaire){
        $this->_prixUnitaire = $prixUnitaire;
    }

    public function getPrixVente(){
        return $this->_prixUnitaire ;
    }

    public function setPrixVente($prixVente){
        $this->_prixVente = $prixVente;
    }

    public function save(){
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into produit values('" . $this->_reference . "',
                                                '" . $this->_libelle . "',
                                                "  . $this->_quantiteStock. ",
                                                "  . $this->_prixAchat . ",
                                                "  . $this->_prixUnitaire . ",
                                                "  . $this->_prixVente . ")");
        $_dba->execute();
        return 0;
    }

    public function delete(){
        $_dba = new Dbaccess();
        $_dba->query("delete from produit where reference='" . $this->_reference . "'" );
        $_dba->execute();
        return 0;
    }

    public function update(){
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock. ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll(){
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from produit");
        return $_dba->resultSet();
    }

    public function getOne(){
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from produit where email='" . $this->_reference . "'");
        return $_dba->single();
    }


    public function count(){
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from produit");
        return $_dba->rowCount();
    }
};

?>