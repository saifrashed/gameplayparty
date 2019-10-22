<?php
require_once 'model/DataHandler.php';

class ReservationLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }


    public function __destruct() {

    }


    public function addOrder($zaalId, $voornaam, $achternaam, $geslacht, $telefoonnummer, $datum, $aantal, $aantaltieners, $aantalvolwasse, $straat, $postcode, $provincie, $stad) {
        return $this->DataHandler->createData('INSERT INTO reserveringen (zaal_id, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum, aantal_kinderen, aantal_tieners, aantal_volwassene, straat, postcode, provincie, stad) VALUES (' . $zaalId . ',"' . $voornaam . '","' . $achternaam . '", "' . $geslacht . '", "' . $telefoonnummer . '", "' . $datum . '", ' . $aantal . ', ' . $aantaltieners . ', ' . $aantalvolwasse . ', "' . $straat . '", "' . $postcode . '", "' . $provincie . '", "' . $stad . '");');
    }

}

?>
