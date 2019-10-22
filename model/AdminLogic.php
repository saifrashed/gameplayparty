<?php
require_once 'model/DataHandler.php';

class AdminLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    public function bestellingen() {
        $html = $this->createReservationsTable($this->DataHandler->readsData('SELECT * from reserveringen'));
        return $html;
    }

    public function createReservationsTable($result) {

        $tableheader = false;
        $html        = "";

        $html .= '<div class="row">';
        $html .= '<div class="col-xs-12 col-md-12">';
        $html .= '<table class="table">';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($tableheader == false) {
                $html .= '<tr>';

                foreach ($row as $key => $value) {
                    $html .= '<th>  ' . $key . '</th>';
                }
                $html        .= "</tr>";
                $tableheader = true;
            }

            $html .= '<tr>';

            foreach ($row as $value) {
                $html .= '<td> ' . $value . ' </td>';
            }
            $html .= '</tr>';
        }

        $html .= '</table></div></div>';


        return $html;
    }

}

?>
