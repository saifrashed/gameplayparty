<?php
require_once 'model/DataHandler.php';

/**
 * Class AdminLogic
 *
 * Handles Author actions
 */
class AdminLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }

    public function Getreserveringen() {

        $sql = $this->DataHandler->readsData('SELECT SUM(reservering_id) FROM reserveringen');
        $html   = '';

        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<li><a href="./?op=admin&selectedPage=' . $row['pagina_titel'] . '">' . $row['pagina_titel'] . '</a></li>';
        }

        return $html;
    }

}

?>
