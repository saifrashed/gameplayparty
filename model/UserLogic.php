<?php
require_once 'model/DataHandler.php';

class UserLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "");
    }

    public function __destruct() {

    }

    public function createUser($firstName, $lastName, $password, $email, $rol) {

        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE email="' . $email . '"');

        if (empty($firstName) && empty($lastName) && empty($password) && empty($email) && empty($gender) && empty($city) && empty($street) && empty($postal)) return false;
        if ($result->rowCount() !== 0) return false;
        if (strlen($password) < 5 || strlen($password) > 50) return false;

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $this->DataHandler->createData('INSERT INTO gebruikers(voornaam, achternaam, email, password, rollen_id) VALUES("' . $firstName . '","' . $lastName . '","' . $email . '","' . $passwordHash . '","'.$rol.'")');

        return true;
    }


    public function loginUser($email, $password) {
        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE email="' . $email . '";');

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $passwordStatus = password_verify($password, $row['password']);

        if ($passwordStatus) {

            session_start();

            $_SESSION['id'] = $row['gebruiker_id'];
            $_SESSION['voornaam'] = $row['voornaam'];
            $_SESSION['achternaam'] = $row['achternaam'];
            $_SESSION['rol'] = $row['rollen_id'];

            return true;
        } else {
            return false;
        }
    }

    public function getRoles() {
        $query = $this->DataHandler->readsData('SELECT * FROM rollen;');
        return $query;
    }

    public function getRole($userId) {
        $result = $this->DataHandler->readsData('SELECT gebruikers.gebruiker_id ,gebruikers.rollen_id, rollen.rollen_id, rollen.omschrijving FROM gebruikers NATURAL JOIN rollen WHERE gebruikers.gebruiker_id = '.$userId.';')->fetch(PDO::FETCH_ASSOC);
        return $result['omschrijving'];
    }

    public function getAdminBioscoop($userId) {
        $result = $this->DataHandler->readsData('SELECT * FROM bioscopen NATURAL JOIN gebruikers WHERE gebruiker_id='.$userId.';')->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}

?>
