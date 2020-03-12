<?php
require_once 'model/DataHandler.php';

class EventsLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", DB_NAME, DB_USERNAME, DB_PASSWORD);
    }


    public function read($eventId) {
        return $this->DataHandler->readData('SELECT * FROM evenementen WHERE evenement_id="' . $eventId . '";');
    }

    public function reads() {
        return $this->DataHandler->readData('SELECT * FROM evenementen;');
    }

    public function create() {

    }

    public function update() {

    }

    public function delete() {

    }

}

?>
