<?php
require_once 'model/DataHandler.php';

class AdminLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }

    public function getReserveringen() {
        $sql = $this->DataHandler->readsData("SELECT SUM(reservering_id) From reserveringen ")->fetch(PDO::FETCH_ASSOC);
        return $sql;

    }

}

?>
