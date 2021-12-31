<?php
require_once('dbaccess.php');

class Product
{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_reference;
    private  $_description;
    private  $_quantiteStock;
    private  $_prixAchat;
    private  $_prixVente;
    private $_marque;
    private  $_dba; //Connection à la base de données

    //Constructeur   //Surcharge = Overloading
    public function __construct()
    {   //implicite explicite

    }

    //Methodes   //Interfaces
    //Setters and getters
    public function getReference()
    {
        return $this->_reference;
    }

    public function setReference($reference)
    {
        $this->_reference = $reference;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getQuantiteStock()
    {
        return $this->_quantiteStock;
    }

    public function setQuantiteStock($quantiteStock)
    {
        $this->_quantiteStock = $quantiteStock;
    }

    public function getPrixAchat()
    {
        return $this->_prixAchat;
    }

    public function setPrixAchat($prixAchat)
    {
        $this->_prixAchat = $prixAchat;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function getPrixVente()
    {
        return $this->_prixUnitaire;
    }

    public function setPrixVente($prixVente)
    {
        $this->_prixVente = $prixVente;
    }

    public function save()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into product values('" . $this->_reference . "',
                                                '" . $this->_description . "',
                                                "  . $this->_quantiteStock . ",
                                                "  . $this->_prixAchat . ",
                                                "  . $this->_prixVente . ",
                                                '"  . $this->_marque . "')");
        $_dba->execute();
        return 0;
    }

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from produit where reference='" . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from product");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from produit where email='" . $this->_reference . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from produit");
        return $_dba->rowCount();
    }
};

class Client
{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_id;
    private  $_fname;
    private  $_lname;
    private  $_address;
    private  $_tel;
    private  $_email;
    private  $_fidelity;
    private  $_dba;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getFname()
    {
        return $this->_fname;
    }

    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    public function getLname()
    {
        return $this->_lname;
    }

    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    public function getAddress()
    {
        return $this->_address;
    }

    public function setAddress($address)
    {
        $this->_address = $address;
    }

    public function getTel()
    {
        return $this->_tel;
    }

    public function setTel($tel)
    {
        $this->_tel = $tel;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getFidelity()
    {
        return $this->_fidelity;
    }

    public function setFidelity($fidelity)
    {
        $this->_fidelity = $fidelity;
    }

    public function save()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into client values('" . $this->_id . "',
                                                '" . $this->_fname . "',
                                                '"  . $this->_lname . "',
                                                '"  . $this->_address . "',
                                                '"  . $this->_tel . "',
                                                '"  . $this->_email . "',
                                                '"  . $this->_fidelity . "')");
        $_dba->execute();
        return 0;
    }

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where id='" . $this->_id . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client where id='" . $this->_id . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from client");
        return $_dba->rowCount();
    }
};

class Order
{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_num;
    private  $_deliveryAddress;
    private  $_dateO;
    private  $_idClient;

    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getDeliveryAddress()
    {
        return $this->_deliveryAddress;
    }

    public function setDeliveryAddress($deliveryAddress)
    {
        $this->_deliveryAddress = $deliveryAddress;
    }


    public function getDateO()
    {
        return $this->_dateO;
    }

    public function setDateO($dateO)
    {
        $this->_dateO = $dateO;
    }

    public function getIdClient()
    {
        return $this->_idClient;
    }

    public function setIdCient($idClient)
    {
        $this->_idClient = $idClient;
    }

    public function save()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into orderinfo values('" . $this->_num . "',
                                                '" . $this->_deliveryAddress . "',
                                                '" . $this->_dateO . "',
                                                '"  . $this->_idClient . "')");
        $_dba->execute();
        return 0;
    }

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where id='" . $this->_id . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from orderinfo");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client where id='" . $this->_id . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from client");
        return $_dba->rowCount();
    }
};

class OrderProduct
{

    private  $_reference;
    private  $_num;
    private  $_quantity;

    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getReference()
    {
        return $this->_reference;
    }

    public function setReference($reference)
    {
        $this->_reference = $reference;
    }


    public function getDateO()
    {
        return $this->_dateO;
    }

    public function setDateO($dateO)
    {
        $this->_dateO = $dateO;
    }

    public function getIdClient()
    {
        return $this->_idClient;
    }

    public function setIdCient($idClient)
    {
        $this->_idClient = $idClient;
    }

    public function save()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into order-product values('" . $this->_reference . "',
                                                '" . $this->_num . "',
                                                '"  . $this->_quantity . "')");
        $_dba->execute();
        return 0;
    }

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where id='" . $this->_id . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from order-product where num='" . $this->_num . "'");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client where id='" . $this->_id . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from client");
        return $_dba->rowCount();
    }
};
