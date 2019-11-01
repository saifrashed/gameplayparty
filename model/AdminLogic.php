<?php
require_once 'model/DataHandler.php';

class AdminLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    public function bestellingen() {
        return $this->createReservationsTable($this->DataHandler->readsData('SELECT naam, reservering_id, zaal_nummer, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum from reserveringen natural join zalen natural join bioscopen'));
    }

    public function statistics() {
        return $this->createStatisticTable($this->DataHandler->readsData('SELECT  SUM(aantal_kinderen), SUM(aantal_volwassenen), SUM(aantal_tieners) from reserveringen'));
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

                $html .= '<th>Bioscoop </th>';
                $html .= '<th>Reserveringsnummer </th>';
                $html .= '<th>Zaalnummer </th>';
                $html .= '<th>voornaam </th>';
                $html .= '<th>achternaam </th>';
                $html .= '<th>geslacht </th>';
                $html .= '<th>Telefoonnummer </th>';
                $html .= '<th>Datum </th>';


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


    public function createStatisticTable($result) {

        $tableheader = false;
        $html        = "";

        $html .= '<div class="row">';
        $html .= '<div class="col-xs-12 col-md-12">';
        $html .= '<table class="table">';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($tableheader == false) {
                $html        .= '<tr>';
                $html        .= '<th> Kind aankopen </th>';
                $html        .= '<th> Tiener aankopen </th>';
                $html        .= '<th> Volwassen aankopen </th>';
                $html        .= '<th> Totaal </th>';
                $html        .= "</tr>";
                $tableheader = true;
            }
            $html    .= '<tr>';
            $html    .= '<td> ' . $row['SUM(aantal_kinderen)'] . ' </td>';
            $html    .= '<td> ' . $row['SUM(aantal_tieners)'] . ' </td>';
            $html    .= '<td> ' . $row['SUM(aantal_volwassenen)'] . ' </td>';
            $poep    = $row['SUM(aantal_volwassenen)'] + $row['SUM(aantal_tieners)'] + $row['SUM(aantal_kinderen)'];
            $html    .= '<td> ' . $poep . '</td>';
            $html    .= '</tr>';
            $html    .= '<tr>';
            $html    .= '<td> €' . $row['SUM(aantal_kinderen)'] * 6.50 . ' </td>';
            $html    .= '<td> €' . $row['SUM(aantal_tieners)'] * 9 . ' </td>';
            $html    .= '<td> €' . $row['SUM(aantal_volwassenen)'] * 11 . ' </td>';
            $poeperd = $row['SUM(aantal_volwassenen)'] * 11 + $row['SUM(aantal_tieners)'] * 9 + $row['SUM(aantal_kinderen)'] * 6.50;
            $html    .= '<td> €' . $poeperd . '</td>';
            $html    .= '</tr>';

        }

        $html .= '</table></div></div>';


        return $html;
    }
}

?>
