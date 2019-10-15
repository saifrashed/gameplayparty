<?php
require_once 'model/DataHandler.php';

class ReservationLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }


    public function __destruct() {

    }


    public function addOrder($zaalId, $prijs, $voornaam, $achternaam, $geslacht, $telefoonnummer, $datum, $aantal) {
        return $this->DataHandler->createData('INSERT INTO reserveringen (zaal_id, prijs, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum, aantal) VALUES ('.$zaalId.', '.$prijs.',"' . $voornaam . '","' . $achternaam . '", "' . $geslacht . '", "' . $telefoonnummer . '", "' . $datum . '", ' . $aantal . ');');
    }
}

?>
