<?php
require_once 'model/DataHandler.php';

class ReservationLogic
{

    public function __construct()
    {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }


    public function __destruct()
    {

    }


    public function addOrder($voornaam, $achternaam, $geslacht, $telefoonnummer, $datum, $aantal)
    {
        return $this->DataHandler->createData('INSERT INTO reserveringen (voornaam, achternaam, geslacht, telefoonnummer, geplande_datum, aantal) VALUES (' . $voornaam . ',' . $achternaam . ', ' . $geslacht . ', ' . $telefoonnummer . ', ' . $datum . ', ' . $aantal . ');');
    }
}
?>
