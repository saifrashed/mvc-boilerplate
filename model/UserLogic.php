<?php
require_once 'model/DataHandler.php';

class GeneralLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", DB_NAME, DB_USERNAME, DB_PASSWORD);
    }

}

?>
