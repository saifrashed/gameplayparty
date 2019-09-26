<?php
require_once 'model/ReservationLogic.php';
require_once 'model/CinemaLogic.php';
require_once 'model/UserLogic.php';
require_once 'model/utilities.php';


class UserController {
    public function __construct() {
        $this->ReservationLogic = new ReservationLogic();
        $this->CinemaLogic = new CinemaLogic();
        $this->UserLogic = new UserLogic();
        $this->Utilities = new Utilities();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'login':
                    $this->collectAdminLogin();
                    break;
                case 'register':
                    $this->collectAdminRegister();
                    break;
                case 'contact':
                    $this->collectContact();
                    break;
                case 'reservations':
                    $this->collectReservations();
                    break;
                case 'home':
                    $this->collectHome();
                    break;
                default:
                    $this->collectHome();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();

        }

    }

    public function collectHome() {

        $bioscopen = $this->CinemaLogic->getCinemas();

        include './view/home.php';
    }

    public function collectReservations() {
        if(!$_GET['bioscoop']) {
            $bioscopen = $this->CinemaLogic->getCinemas();
            include './view/reservations.php';
        } else {
            $bioscoop = $this->CinemaLogic->getCinema($_GET['bioscoop']);
            $zalen = $this->CinemaLogic->getHalls($bioscoop['bioscoop_id']);
            include './view/single-reservations.php';
        }
    }

    public function collectContact() {
        include './view/contact.php';
    }


    /**
     * Admin views
     */

    public function collectAdminLogin() { // Checks or displays login

        if ($_POST['email'] && $_POST['password']) {
            $status = $this->UserLogic->loginUser($_POST['email'], $_POST['password']);
        }


        switch($status) {

        }

        if($status) {
            include './view/beheerderPaginas/beheerder.php';
        } else {
            include './view/beheerderPaginas/login.php';
        }
    }

    public function collectAdminRegister() {

        $html = '';
        $result = $this->UserLogic->getRoles();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<option value="'. $row['rollen_id'] .'">'. $row['omschrijving'] .'</option>';
        }

        if($_POST['email'] && $_POST['password']) {
            $this->UserLogic->createUser($_POST['voornaam'], $_POST['achternaam'], $_POST['password'], $_POST['email'], $_POST['rol']);
        }

        include './view/beheerderPaginas/register.php';
    }
}

