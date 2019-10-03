<?php
require_once 'model/DataHandler.php';

class AuthorLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }


    public function getPages() {
        return $this->DataHandler->readsData('SELECT * FROM paginas');
    }

    public function getHomeContent() {
        return $this->DataHandler->readsData('SELECT inhoud FROM paginas WHERE naam="home"')->fetch(PDO::FETCH_ASSOC)['inhoud'];
    }

}

?>
