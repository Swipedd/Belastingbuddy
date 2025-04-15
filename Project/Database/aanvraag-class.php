<?php
require "db.php";

class aanvraag extends DB{

    public function SelectBestelling($PersoonID){
        return $this->run("SELECT * FROM aanvragen WHERE PersoonID = :PersoonID",
           [
            "PersoonID" => $PersoonID,
           ])->fetchAll();       
    } 
    
    public function SelectAlleAanvraag(){
        return $this->run("SELECT * FROM aanvragen")->fetchAll();
    }
}




?>