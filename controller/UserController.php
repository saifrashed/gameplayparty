<?php
require_once 'model/ReservationLogic.php';
require_once 'model/CinemaLogic.php';
require_once 'model/UserLogic.php';
require_once 'model/AuthorLogic.php';
require_once 'model/AdminLogic.php';
require_once 'model/utilities.php';

session_start();


/**
 * Class UserController
 *
 * Controls user display and admin display
 */
class UserController {

    public function __construct() {
        $this->ReservationLogic = new ReservationLogic();
        $this->CinemaLogic      = new CinemaLogic();
        $this->UserLogic        = new UserLogic();
        $this->AuthorLogic      = new AuthorLogic();
        $this->AdminLogic      = new AdminLogic();
        $this->Utilities        = new Utilities();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
            switch ($op) {
                case 'admin':
                    $this->collectAdmin($_REQUEST['selectedPage']);
                    break;
                case 'employee':
                    $this->collectEmployee($_REQUEST['selectedPage']);
                    break;
                case 'author':
                    $this->collectAuthor($_REQUEST['selectedPage']);
                    break;
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
        $content   = $this->AuthorLogic->getContent('home');
        $bioscopen = $this->CinemaLogic->getCinemas();
        include './view/home.php';
    }

    public function collectReservations() {
        $content   = $this->AuthorLogic->getContent('reserveren');

        if (!$_GET['bioscoop']) {
            $bioscopen = $this->CinemaLogic->getCinemas();
            include './view/reservations.php';
        } else {
            $bioscoop = $this->CinemaLogic->getCinema($_GET['bioscoop']);
            $zalen    = $this->CinemaLogic->getHalls($bioscoop['bioscoop_id']);
            include './view/single-reservations.php';
        }
    }

    public function collectContact() {
        $content   = $this->AuthorLogic->getContent('contact');
        include './view/contact.php';
    }


    /**
     * Admin views
     *
     * These views control the admin pages
     */

    public function collectAdminLogout() { // logs user off
        session_destroy();

        $content   = $this->AuthorLogic->getContent('home');
        $bioscopen = $this->CinemaLogic->getCinemas();
        include './view/home.php';
    }

    public function collectAdminRegister() {

        $html   = '';
        $result = $this->UserLogic->getRoles();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<option value="' . $row['rollen_id'] . '">' . $row['omschrijving'] . '</option>';
        }

        if ($_POST['email'] && $_POST['password']) {
            $this->UserLogic->createUser($_POST['voornaam'], $_POST['achternaam'], $_POST['password'], $_POST['email'], $_POST['rol']);
        }

        include './view/beheerderPaginas/register.php';
    }

    public function collectAdminLogin() { // Checks or displays login

        if (!$_POST['email'] && !$_POST['password']) {
            include './view/beheerderPaginas/login.php';
        } else {
            $status = $this->UserLogic->loginUser($_POST['email'], $_POST['password']);

            if (!$status) {
                include './view/beheerderPaginas/login.php';
            } else {
                if ($_SESSION) {
                    switch ($this->UserLogic->getRole($_SESSION['id'])) {
                        case 'Beheerder':

                            header('Location: ./?op=admin');
                            break;
                        case 'Bioscoop medewerker':
                            header('Location: ./?op=employee');
                            break;
                        case 'Redacteur':
                            header('Location: ./?op=author');
                            break;
                        default:
                            echo 'U bent niet ingelogd';
                            break;
                    }
                }
            }
        }
    }

    public function collectAdmin($selectedPage) {

        if ($_SESSION['rol'] == 'Beheerder') {

            switch($_GET['selectedPage']) {
                case 'statistics' :
                    $getReserveringen = $this->AdminLogic->Getreserveringen();
                    break;
            }

            include './view/beheerderPaginas/beheerder.php';
        } else {
            echo 'Your not authorized to see the page.';
        }
    }

    public function collectEmployee($selectedPage) {

        if ($_SESSION['rol'] == 'Bioscoop medewerker') {

            include './view/beheerderPaginas/bioscoop.php';
        } else {
            echo 'Your not authorized to see the page.';
        }
    }

    public function collectAuthor($selectedPage) {

        if ($_SESSION['rol'] == 'Redacteur') {


            if($selectedPage && $_GET['content']) {
                $this->AuthorLogic->setContent($selectedPage, $_GET['content']);
            }

            $navLinks = $this->AuthorLogic->getPageLinks();
            $content  = $this->AuthorLogic->getContent($selectedPage);

            include './view/beheerderPaginas/redacteur.php';
        }
    }

}

