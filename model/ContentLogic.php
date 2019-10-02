<?php
require_once 'model/DataHandler.php';

class ContentLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    public function getHomeContent() {
        return $this->DataHandler->readsData('SELECT inhoud FROM paginas WHERE naam="home"')->fetch(PDO::FETCH_ASSOC)['inhoud'];
    }

}

?>
