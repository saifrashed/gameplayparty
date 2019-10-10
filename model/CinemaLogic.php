<?php
require_once 'model/DataHandler.php';

class CinemaLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }

    /**
     * Gets all cinemas
     *
     * @return string
     */
    public function getCinemas() {
        $sql  = $this->DataHandler->readsData('SELECT * FROM bioscopen NATURAL JOIN provincies');
        $html = '';
        // Bioscopen worden weergeven uit de database.
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<div class="col-xs-12 col-md-4">';
            $html .= '<div class="offer-item">';
            $html .= '<a href="./?op=reservations&bioscoop=' . $row['naam'] . '">';
            $html .= '<img src="./assets/img/bioscopen/' . $row['bioscoop_id'] . '.png">';
            $html .= '<h3>' . $row['naam'] . '</h3>';
            $html .= '</a>';
            $html .= '<ul>';
            $html .= '<li>' . $row['adres'] . ', ' . $row['omschrijving'] . '</li>';
            $html .= '</ul>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }


    /**
     * Gets single cinema
     *
     * @param $bioscoopName
     * @return mixed
     */
    public function getCinema($bioscoopName) {
        $sql = $this->DataHandler->readsData('SELECT * FROM bioscopen WHERE naam="' . $bioscoopName . '"')->fetch(PDO::FETCH_ASSOC);
        return $sql;
    }

    /**
     * Formats all halls in a list
     *
     * @param $bioscoopId
     * @return string
     */
    public function displayHalls($bioscoopId) {
        $result = $this->DataHandler->readsData('SELECT * FROM bioscopen NATURAL JOIN zalen WHERE bioscoop_id= ' . $bioscoopId . '');
        $html   = '';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<div class="col-xs-12 col-md-4">';
            $html .= '<div class="offer-item">';
            $html .= '<img src="./assets/img/bioscopen/zalen/' . $row['zaal_id'] . '.jpg">';
            $html .= '<h2 style="text-align: left;">Zaal ' . $row['zaal_nummer'] . '</h2>';
            $html .= '<ul>';
            $html .= '<li>Beschikbaarheid: ' . $row['begintijd'] . ' - ' . $row['eindtijd'] . '</li>';
            $html .= '<li>aantal plaatsen: ' . $row['aantal_plaatsen'] . '</li>';
            $html .= '<li>Rolstoel plaatsen: ' . $row['rolstoel_plaatsen'] . '</li>';
            $html .= '<li>schermgrootte: ' . $row['schermgrootte'] . '</li>';
            $html .= '<li>faciliteiten: ' . $row['faciliteiten'] . '</li>';
            $html .= '</ul>';
            $html .= '<a href="#" class="btn-link dark">Reserveer binnenkort <i class="fas fa-arrow-circle-right"></i></a>';
            $html .= '</div>';
            $html .= '</div>';
        }


        return $html;
    }


}

?>
