<?php
require_once 'model/ReservationLogic.php';
require_once 'model/CinemaLogic.php';
require_once 'model/UserLogic.php';
require_once 'model/AuthorLogic.php';
require_once 'model/utilities.php';
require_once 'model/AdminLogic.php';

class UserController {
    public function __construct() {
        $this->ReservationLogic = new ReservationLogic();
        $this->CinemaLogic = new CinemaLogic();
        $this->UserLogic = new UserLogic();
        $this->AuthorLogic = new AuthorLogic();
        $this->AdminLogic = new AdminLogic();
        $this->Utilities = new Utilities();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'logout':
                    $this->collectAdminLogout();
                    break;
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
        $homeContent = $this->AuthorLogic->getHomeContent();
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

    public function collectAdminLogout() { // logs user off
        session_start();
        session_destroy();

        $homeContent = $this->AuthorLogic->getHomeContent();
        $bioscopen = $this->CinemaLogic->getCinemas();
        include './view/home.php';
    }


    public function collectAdminLogin() { // Checks or displays login
        session_start();

        if (!$_POST['email'] && !$_POST['password']) {
            include './view/beheerderPaginas/login.php';
        } else {
            $status = $this->UserLogic->loginUser($_POST['email'], $_POST['password']);

            if(!$status) {
                include './view/beheerderPaginas/login.php';
            } else {
                if($_SESSION) {
                    switch ($this->UserLogic->getRole($_SESSION['id'])) {
                        case 'Beheerder':
                            $reserveringen = $this->AdminLogic->getReserveringen();
                            include './view/beheerderPaginas/beheerder.php';
                            break;
                        case 'Bioscoop medewerker':
                            include './view/beheerderPaginas/bioscoop.php';
                            break;
                        case 'Redacteur':
                            include './view/beheerderPaginas/redacteur.php';
                            break;
                        default:
                            echo 'U bent niet ingelogd';
                            break;
                    }
                }
            }
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

