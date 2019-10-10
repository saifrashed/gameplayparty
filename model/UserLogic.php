<?php
require_once 'model/DataHandler.php';

class UserLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty", "root", "Rashed112");
    }

    public function __destruct() {

    }

    /**
     * Creates user with the given parameters
     *
     * @param $firstName
     * @param $lastName
     * @param $password
     * @param $email
     * @param $rol
     * @return bool
     */
    public function createUser($firstName, $lastName, $password, $email, $rol) {

        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE email="' . $email . '"');

        if (empty($firstName) && empty($lastName) && empty($password) && empty($email) && empty($gender) && empty($city) && empty($street) && empty($postal)) return false;
        if ($result->rowCount() !== 0) return false;
        if (strlen($password) < 5 || strlen($password) > 50) return false;

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $this->DataHandler->createData('INSERT INTO gebruikers(voornaam, achternaam, email, password, rollen_id) VALUES("' . $firstName . '","' . $lastName . '","' . $email . '","' . $passwordHash . '","'.$rol.'")');

        return true;
    }


    /**
     * Logs user in by checking combination of email & password
     *
     * @param $email
     * @param $password
     * @return bool
     */
    public function loginUser($email, $password) {
        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE email="' . $email . '";');

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $passwordStatus = password_verify($password, $row['password']);

        if ($passwordStatus) {

            session_start();

            $_SESSION['id'] = $row['gebruiker_id'];
            $_SESSION['voornaam'] = $row['voornaam'];
            $_SESSION['achternaam'] = $row['achternaam'];
            $_SESSION['rol'] = $this->getRole($row['gebruiker_id']);

            if($this->getBioscoop($row['gebruiker_id'])) {
                $_SESSION['bioscoop_naam'] = $this->getBioscoop($row['gebruiker_id']);
            }

            return true;
        } else {
            return false;
        }
    }

    /**
     * Returns all the roles
     *
     * @return false|PDOStatement
     */
    public function getRoles() {
        $query = $this->DataHandler->readsData('SELECT * FROM rollen;');
        return $query;
    }

    /**
     * Checks current users role
     *
     * @param $userId
     * @return mixed
     */
    public function getRole($userId) {
        $result = $this->DataHandler->readsData('SELECT gebruikers.gebruiker_id ,gebruikers.rollen_id, rollen.rollen_id, rollen.omschrijving FROM gebruikers NATURAL JOIN rollen WHERE gebruikers.gebruiker_id = '.$userId.';')->fetch(PDO::FETCH_ASSOC);
        return $result['omschrijving'];
    }

    /**
     *
     *
     * @param $userId
     * @return mixed
     */
    public function getBioscoop($userId) {
        $result = $this->DataHandler->readsData('SELECT bioscopen.naam FROM bioscopen NATURAL JOIN gebruikers WHERE gebruiker_id='.$userId.';')->fetch(PDO::FETCH_ASSOC);
        return $result['naam'];
    }

}

?>
