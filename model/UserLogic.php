<?php
require_once 'model/DataHandler.php';

class UserLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    public function createUser($firstName, $lastName, $password, $email, $rol) {

        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE email="' . $email . '"');

        if (empty($firstName) && empty($lastName) && empty($password) && empty($email) && empty($gender) && empty($city) && empty($street) && empty($postal)) {
            return header("Location: ./?op=home?status=Fill all boxes");
        }

        if ($result->rowCount() !== 0) {
            return header("Location: ./?op=home?status=User already exists");
        }

        if (strlen($password) < 5 || strlen($password) > 50) {
            return header("Location: ./?op=home?status=Password is too short/long");
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $this->DataHandler->createData('INSERT INTO gebruikers(voornaam, achternaam, email, password, rollen_id) 
                                VALUES("' . $firstName . '","' . $lastName . '","' . $email . '","' . $passwordHash . '","'.$rol.'")');
        return header("Location: ./?op=home&status=Password is too short/long");
    }


    public function getRoles() {
        $query = $this->DataHandler->readsData('SELECT * FROM rollen;');

        return $query;
    }


}

?>
