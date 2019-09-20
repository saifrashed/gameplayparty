<?php
require_once 'model/DataHandler.php';

class CinemaLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    public function getCinemas() {
        $sql = $this->DataHandler->readsData('SELECT * FROM bioscopen');
        return $sql;
    }

    public function getCinema($bioscoopName) {
        $sql = $this->DataHandler->readsData('SELECT * FROM bioscopen WHERE naam="'.$bioscoopName.'"');
        return $sql;
    }


}

?>
