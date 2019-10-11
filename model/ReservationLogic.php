<?php
require_once 'model/DataHandler.php';

class ReservationLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }


    public function __destruct() {

    }

}

?>
