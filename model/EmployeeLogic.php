<?php
require_once 'model/DataHandler.php';

/**
 * Class AuthorLogic
 *
 * Handles Author actions
 */
class EmployeeLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }

    /**
     * Gets all the halls
     *
     * @param $bioscoop
     * @return string
     */
    public function getHalls($bioscoop) {
        return $this->createHallsTable( $this->DataHandler->readsData('SELECT zaal_id, bioscoop_id, zaal_nummer, faciliteiten, aantal_plaatsen, versies, schermgrootte, begintijd, eindtijd FROM bioscopen NATURAL JOIN zalen WHERE naam= "' . $bioscoop . '"'));
    }

    /**
     * Gets single hall data
     *
     * @param $zaalId
     * @return mixed
     */
    public function getHall($zaalId) {
        return $this->DataHandler->readsData('SELECT * FROM zalen WHERE zaal_id="' . $zaalId . '"')->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Updates a hall
     *
     * @param $zaalId
     * @param $zaalNummer
     * @param $aantalPlaatsen
     * @param $rolstoelPlaatsen
     * @param $schermgrootte
     * @param $faciliteiten
     * @param $versies
     * @param $begintijd
     * @param $eindtijd
     * @return false|PDOStatement
     */
    public function updateHall($zaalId, $zaalNummer, $aantalPlaatsen, $rolstoelPlaatsen, $schermgrootte, $faciliteiten, $versies, $begintijd, $eindtijd) {
        return $this->DataHandler->updateData('UPDATE zalen SET zaal_nummer="' . $zaalNummer . '", aantal_plaatsen="' . $aantalPlaatsen . '" , rolstoel_plaatsen="' . $rolstoelPlaatsen . '" , schermgrootte="' . $schermgrootte . '", faciliteiten="' . $faciliteiten . '", versies="' . $versies . '", begintijd="' . $begintijd . '", eindtijd="' . $eindtijd . '" WHERE zaal_id=' . $zaalId . '');
    }

    /**
     * Adds a hall
     *
     * @param $bioscoopId
     * @param $zaalNummer
     * @param $aantalPlaatsen
     * @param $rolstoelPlaatsen
     * @param $schermgrootte
     * @param $faciliteiten
     * @param $versies
     * @param $begintijd
     * @param $eindtijd
     * @return string
     */
    public function addHall($bioscoopId, $zaalNummer, $aantalPlaatsen, $rolstoelPlaatsen, $schermgrootte, $faciliteiten, $versies, $begintijd, $eindtijd) {
        return $this->DataHandler->createData('INSERT INTO zalen (bioscoop_id, zaal_nummer, aantal_plaatsen, rolstoel_plaatsen, schermgrootte, faciliteiten, versies, begintijd, eindtijd) VALUES (' . $bioscoopId . ', ' . $zaalNummer . ',' . $aantalPlaatsen . ', ' . $rolstoelPlaatsen . ', "' . $schermgrootte . '", "' . $faciliteiten . '", "' . $versies . '", "' . $begintijd . '" ,"' . $eindtijd . '");');
    }

    /**
     * Deletes a hall
     *
     * @param $zaalId
     * @return int
     */
    public function deleteHall($zaalId) {
        return $this->DataHandler->deleteData('DELETE FROM zalen WHERE zaal_id='.$zaalId.'');
    }

    /**
     * Creates table and adds pagination buttons
     *
     * @param      $result
     * @param null $amountPages
     * @return string
     */
    public function createHallsTable($result) {

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
                $html        .= '<th colspan="3" style="text-align: left;">Actions';
                $html        .= "</tr>";
                $tableheader = true;
            }

            $html .= '<tr>';

            foreach ($row as $value) {
                $html .= '<td> ' . $value . ' </td>';
            }

            $html .= '<td><a class="btn btn-secondary" href="./?op=employee&selectedPage=updateHall&bioscoopId=' . $row['bioscoop_id'] . '&zaalId=' . $row['zaal_id'] . '">Bewerken</a></td> ';
            $html .= '<td><a class="btn btn-danger" href="./?op=employee&selectedPage=deleteHall&delete=true&zaalId=' . $row['zaal_id'] . '"><i class="fas fa-times-circle"></i></a></td> ';
            $html .= '</tr>';
        }

        $html .= '</table></div></div>';


        return $html;
    }

}

?>
