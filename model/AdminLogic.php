<?php
require_once 'model/DataHandler.php';

class AdminLogic
{

    public function __construct()
    {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct()
    {

    }

    public function bestellingen()
    {
        $html = $this->createReservationsTable($this->DataHandler->readsData('SELECT zaal_id, reservering_id, naam, zaal_nummer, voornaam, achternaam, geslacht, telefoonnummer, geplande_datum from reserveringen natural join bioscopen natural join zalen'));

        return $html;
    }

    public function statistics()
    {
        $html = $this->createStatisticTable($this->DataHandler->readsData('SELECT  SUM(aantal_kinderen), SUM(aantal_volwassene), SUM(aantal_tieners) from reserveringen'));

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


    public function createStatisticTable($result)
    {

        $tableheader = false;
        $html = "";

        $html .= '<div class="row">';
        $html .= '<div class="col-xs-12 col-md-12">';
        $html .= '<table class="table">';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($tableheader == false) {
                $html .= '<tr>';
                $html .= '<th> Kind aankopen </th>';
                $html .= '<th> Tiener aankopen </th>';
                $html .= '<th> Volwassen aankopen </th>';
                $html .= '<th> Totaal </th>';
                $html .= "</tr>";
                $tableheader = true;
            }
            $html .= '<tr>';
            $html .= '<td> ' . $row['SUM(aantal_kinderen)'] . ' </td>';
            $html .= '<td> ' . $row['SUM(aantal_tieners)'] . ' </td>';
            $html .= '<td> ' . $row['SUM(aantal_volwassene)'] . ' </td>';
            $poep = $row['SUM(aantal_volwassene)'] + $row['SUM(aantal_tieners)'] + $row['SUM(aantal_kinderen)'];
            $html .= '<td> ' . $poep . '</td>';
            $html .= '</tr>';
            $html .= '<tr>';
            $html .= '<td> €' . $row['SUM(aantal_kinderen)'] * 6.50 . ' </td>';
            $html .= '<td> €' . $row['SUM(aantal_tieners)'] * 9 . ' </td>';
            $html .= '<td> €' . $row['SUM(aantal_volwassene)'] * 11 . ' </td>';
            $poeperd = $row['SUM(aantal_volwassene)'] * 11 + $row['SUM(aantal_tieners)'] * 9 + $row['SUM(aantal_kinderen)'] * 6.50;
            $html .= '<td> €' . $poeperd . '</td>';
            $html .= '</tr>';

        }

        $html .= '</table></div></div>';


        return $html;
    }
}
?>
