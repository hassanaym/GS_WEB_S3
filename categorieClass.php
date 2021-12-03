<?php

require_once('dbaccess.php');

class Categorie{
    private $_reference;
    private $_description;
    private $_dba;

    public function __construct(){

    }

    public function getReference(){
        return $this->_reference;
    }

    public function setReference($ref){
        $this->_reference = $ref;
    }

    public function getDescription(){
        return $this->_description;
    }

    public function setDescription($desc){
        $this->_description = $desc;
    }

    public function save(){
        echo 'ana lhih';
        echo $this->_reference;
        echo $this->_description;
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into categorie values('" . $this->_reference . "',
                                                '"  . $this->_description . "')");
        $_dba->execute();
        return 0;
    }


    public function getAll(){
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from categorie");
        return $_dba->resultSet();
    }

}



?>