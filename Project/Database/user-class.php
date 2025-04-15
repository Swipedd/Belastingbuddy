<?php
require_once "db.php";

class User extends DB {
    public function registerPersoon($Naam, $Achternaam, $Adres, $Postcode, $Woon, $Gezin, $Email, $Wachtwoord) {
        $persoon = $this->run("INSERT INTO personen (Naam, Achternaam, Adres, Postcode, Woonsituatie, Kinderen)
                               VALUES (:Naam, :Achternaam, :Adres, :Postcode, :Woonsituatie, :Kinderen)", 
            [
                "Naam" => $Naam,
                "Achternaam" => $Achternaam,
                "Adres" => $Adres,
                "Postcode" => $Postcode,
                "Woonsituatie" => $Woon,
                "Kinderen" => $Gezin
            ]);
        
        $hashedWachtwoord = password_hash($Wachtwoord, PASSWORD_DEFAULT);
    
        $PersoonId = $this->pdo->lastInsertId();
        $account = $this->run("INSERT INTO accounts (Email, Wachtwoord, PersoonID, Functie) 
            VALUES (:Email, :Wachtwoord, :PersoonID, :Functie)", 
            [
                "Email" => $Email,
                "Wachtwoord" => $hashedWachtwoord,
                "PersoonID" => $PersoonId,
                "Functie" => "Persoon"
            ]);
        
        return ['persoon' => $persoon, 'account' => $account];
    }

    public function getLastInsertId() {
        return $this->pdo->lastInsertId();
    }

    public function registerAccount($Email, $Wachtwoord, $PersoonID) {
        $hashedWachtwoord = password_hash($Wachtwoord, PASSWORD_DEFAULT);
        
        return $this->run("INSERT INTO accounts (Email, Wachtwoord, PersoonID) 
                           VALUES (:email, :wachtwoord, :persoonID)", 
        [
            "Email" => $Email,
            "Wachtwoord" => $hashedWachtwoord,
            "persoonID" => $PersoonID
        ]);
    }

    public function login($Email, $Wachtwoord) {
        $user = $this->run("SELECT * FROM accounts WHERE Email = :Email", ["Email" => $Email])->fetch();
        
        if ($user && password_verify($Wachtwoord, $user['Wachtwoord'])) {
            return $user;  
        }
        return null;
    }

    public function SelectPersoon($ID){
        return $user = $this->run("SELECT * FROM personen WHERE ID = :ID", ["ID" => $ID])->fetch();  
     }

     // Update wachtwoord gebruiker
    public function UpdatePersoon($PersoonID, $Wachtwoord) {
        $hashedWachtwoord = password_hash($Wachtwoord, PASSWORD_DEFAULT);
        return $this->run("UPDATE accounts SET Wachtwoord = :Wachtwoord WHERE PersoonID = :PersoonID",
        [
            "Wachtwoord" => $hashedWachtwoord,
            "PersoonID" => $PersoonID
        ]);
    }
}
?>
