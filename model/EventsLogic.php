<?php
require_once 'model/DataHandler.php';

class UserLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", DB_NAME, DB_USERNAME, DB_PASSWORD);
    }


    public function read($userId) {
        return $this->DataHandler->readData('SELECT * FROM gebruikers NATURAL JOIN rollen WHERE gebruiker_id="' . $userId . '";');
    }

    public function reads() {
        return $this->DataHandler->readData('SELECT * FROM gebruikers NATURAL JOIN rollen;');
    }

    public function create() {

    }

    public function update() {

    }

    public function delete() {

    }

}

?>
