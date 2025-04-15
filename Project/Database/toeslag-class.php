<?php
require_once "db.php";


class Toeslag extends DB {
    // Toeslag aanvragen
    public function AanvraagToeslag($Naam, $Toeslag, $jaarInkomen, $Kinderen, $Huur, $Bericht) {
        return $this->run("INSERT INTO toeslag (Naam, Toeslag, JaarInkomen, Kinderen, Huur, Bericht)
                           VALUES(:Naam, :Toeslag, :JaarInkomen, :Kinderen, :Huur, :Bericht)",
        [
            "Naam" => $Naam,
            "Toeslag" => $Toeslag,
            "JaarInkomen" => $jaarInkomen,
            "Kinderen" => $Kinderen,
            "Huur" => $Huur,
            "Bericht" => $Bericht
        ]);                    
    }
    // Als Admin of als klant kan je zien welke toeslag allemaal je hebt aangevraagd
    public function SelectToeslag(){
        return $this->run("SELECT * FROM toeslag")->fetchAll(PDO::FETCH_ASSOC);
       }
       
    // Als Admin kan je de toeslag weigeren of Als Klant kan je toeslag op stop zetten
    public function DeleteToeslag($ID) {
        return $this->run("DELETE FROM toeslag WHERE ID = :ID", ["ID" => $ID]);
    }      

    // Als Klant kan je toeslag gaan updaten
    public function UpdateToeslag($ID, $Naam, $Toeslag, $jaarInkomen, $Kinderen, $Huur, $Bericht) {
        return $this->run("UPDATE toeslag 
                        SET Naam = :Naam,
                            Toeslag = :Toeslag, 
                            JaarInkomen = :JaarInkomen, 
                            Kinderen = :Kinderen, 
                            Huur = :Huur,
                            Bericht = :Bericht 
                        WHERE ID = :ID",
        [
            "id" => $ID,
            "Naam" => $Naam,
            "Toeslag" => $Toeslag,
            "JaarInkomen" => $jaarInkomen,
            "Kinderen" => $Kinderen,
            "Huur" => $Huur,
            "Bericht" => $Bericht
        ]);
    }
}
?>