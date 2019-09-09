<?php
require_once 'model/BookingLogic.php';
require_once 'model/utilities.php';


class BookingController {
    public function __construct() {
        $this->ProductsLogic = new BookingLogic();
        $this->Utilities = new Utilities();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'contact':
                    $this->collectContact();
                    break;
                case 'about':
                    $this->collectAbout();
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
        include './view/home.php';
    }

    public function collectReservations() {
        include './view/reservations.php';
    }

    public function collectAbout() {
        include './view/about.php';
    }

    public function collectContact() {
        include './view/contact.php';
    }
}

