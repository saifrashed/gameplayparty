<?php
require_once 'model/DataHandler.php';

class AdminLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }

    public function bestellingen() {
        $html =  $this->createReservationsTable($this->DataHandler->readsData('SELECT naam, zaal_nummer, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum, aantal from reserveringen natural join bioscopen natural join zalen'));
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
                $html .= '<th> Totaal </th>';
                $html        .= "</tr>";
                $tableheader = true;
            }

            $html .= '<tr>';
            foreach ($row as $value) {
                $html .= '<td> ' . $value . ' </td>';

            }
            $html .= '<td> €' . $row['aantal'] * 11 . ' </td>';

            $html .= '</tr>';

        }

        $html .= '</table></div></div>';



        return $html;
    }
    public function statistics() {
        $html =  $this->createReservationsTable($this->DataHandler->readsData('SELECT  SUM(aantal) from reserveringen'));
        return $html;
    }
}

?>
