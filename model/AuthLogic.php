<?php
require_once 'model/DataHandler.php';

/**
 * Class AuthLogic handles user authorization
 */
class AuthLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", DB_NAME, DB_USERNAME, DB_PASSWORD);
    }

    /**
     * Registers a user. (not used currently)
     *
     * @param $username
     * @param $password
     * @param $email
     * @return bool
     */
    public function register($username, $password, $email) {
        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE gebruiker_email="' . $email . '"');

        if (empty($username) && empty($password) && empty($email))
            return false;
        if ($result->rowCount() !== 0)
            return false;
        if (strlen($password) < 5 || strlen($password) > 50)
            return false;

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $this->DataHandler->createData('INSERT INTO gebruikers(gebruiker_naam, gebruiker_wachtwoord, gebruiker_email, rol_id) VALUES("' . $username . '","' . $passwordHash . '","' . $email . '")');

        return true;
    }

    /**
     * Logs a user in.
     *
     * @param $email
     * @param $password
     * @return bool
     */
    public function login($email, $password) {
        $result = $this->DataHandler->readsData('SELECT * FROM gebruikers WHERE gebruiker_email="' . $email . '";');

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $passwordStatus = password_verify($password, $row['gebruiker_wachtwoord']);

        if ($passwordStatus) {
            session_start();

            $_SESSION['id']             = $row['gebruiker_id'];
            $_SESSION['gebruikersnaam'] = $row['gebruiker_naam'];
            $_SESSION['email']          = $row['gebruiker_email'];
            $_SESSION['rol']            = $row['rol_id'];

            return true;
        }
        else {
            return false;
        }
    }
}

?>
