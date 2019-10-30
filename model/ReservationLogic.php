<?php
require_once 'model/DataHandler.php';

class ReservationLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }


    public function __destruct() {

    }


    public function getServices() {
        $sql  = $this->DataHandler->readData('SELECT * FROM diensten;');
        $html = '';

        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<option value="' . $row['dienst_id'] . '">' . $row['omschrijving'] . '</option>';
        }

        return $html;
    }

    public function addOrder($zaalId, $voornaam, $achternaam, $geslacht, $telefoonnummer, $datum, $aantal, $aantaltieners, $aantalvolwasse, $straat, $postcode, $provincie, $stad) {
        return $this->DataHandler->createData('INSERT INTO reserveringen (zaal_id, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum, aantal_kinderen, aantal_tieners, aantal_volwassenen, straat, postcode, provincie, stad) VALUES (' . $zaalId . ',"' . $voornaam . '","' . $achternaam . '", "' . $geslacht . '", "' . $telefoonnummer . '", "' . $datum . '", ' . $aantal . ', ' . $aantaltieners . ', ' . $aantalvolwasse . ', "' . $straat . '", "' . $postcode . '", "' . $provincie . '", "' . $stad . '");');
    }

    public function getOrder($zaalId, $dienstId) {

        $sql    = $this->DataHandler->readData('SELECT * FROM zalen NATURAL JOIN bioscopen NATURAL JOIN provincies WHERE zaal_id = ' . $zaalId . '')->fetch(PDO::FETCH_ASSOC);
        $dienst = $this->DataHandler->readData('SELECT * FROM diensten WHERE dienst_id = ' . $dienstId . '')->fetch(PDO::FETCH_ASSOC);


        $data = array(
            'zaal_nummer'        => $sql['zaal_nummer'],
            'rolstoel_plaatsen'  => $sql['rolstoel_plaatsen'],
            'schermgrootte'      => $sql['schermgrootte'],
            'faciliteiten'       => $sql['faciliteiten'],
            'versies'            => $sql['versies'],
            'begintijd'          => $sql['begintijd'],
            'eindtijd'           => $sql['eindtijd'],
            'plaatsen'           => $sql['aantal_plaatsen'],
            'naam'               => $sql['naam'],
            'informatie'         => $sql['info'],
            'adres'              => $sql['adres'],
            'postcode'           => $sql['bios_postcode'],
            'provincie'          => $sql['omschrijving'],
            'dienst_naam'        => $dienst['omschrijving'],
            'tarief_volwassenen' => $dienst['tarief_volwassenen'],
            'tarief_tieners'     => $dienst['tarief_tieners'],
            'tarief_kinderen'    => $dienst['tarief_kinderen'],
        );

        return $data;
    }

}

?>
