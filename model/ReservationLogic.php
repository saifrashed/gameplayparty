<?php
require_once 'model/DataHandler.php';

class ReservationLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }


    public function __destruct() {

    }


    public function getServices() {
        $sql = $this->DataHandler->readData('SELECT * FROM diensten;');
        $html = '';

        while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<option value="'.$row['dienst_id'].'">'.$row['omschrijving'].'</option>';
        }

        return $html;
    }

    public function addOrder($zaalId, $voornaam, $achternaam, $geslacht, $telefoonnummer, $datum, $aantal, $aantaltieners, $aantalvolwasse, $straat, $postcode, $provincie, $stad) {
        return $this->DataHandler->createData('INSERT INTO reserveringen (zaal_id, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum, aantal_kinderen, aantal_tieners, aantal_volwassenen, straat, postcode, provincie, stad) VALUES (' . $zaalId . ',"' . $voornaam . '","' . $achternaam . '", "' . $geslacht . '", "' . $telefoonnummer . '", "' . $datum . '", ' . $aantal . ', ' . $aantaltieners . ', ' . $aantalvolwasse . ', "' . $straat . '", "' . $postcode . '", "' . $provincie . '", "' . $stad . '");');
    }

}

?>
