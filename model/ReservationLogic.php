<?php
require_once 'model/DataHandler.php';

class ReservationLogic
{

<<<<<<< HEAD
    public function __construct()
    {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
=======
    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
>>>>>>> 3c1e00ea62902b710dc971b064c8a65f1c00bffe
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
