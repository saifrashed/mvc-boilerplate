<?php
require_once 'model/DataHandler.php';

class GeneralLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", DB_NAME, DB_USERNAME, DB_PASSWORD);
    }

    /**
     * Validates strings
     *
     * @param $data
     * @return mixed|string
     */
    public function prepareData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        return $data;
    }

    /**
     * Gets a phases of a project
     *
     * @return false|PDOStatement
     */
    public function getFases() {
        return $this->DataHandler->readsData('SELECT * FROM projecten_fases;');
    }

    /**
     * Checks a domain for SSL
     *
     * @param $url
     * @return bool
     */
    public function checkSSL($url) {
        $ssl_check = @fsockopen('ssl://' . $url, 443, $errno, $errstr, 30);
        $res       = !!$ssl_check;

        if ($ssl_check) {
            fclose($ssl_check);
        }

        return $res;
    }

    /**
     * Gets IP Adres of a domain,
     *
     * @param $url
     * @return string
     */
    public function checkIp($url) {
        return gethostbyname($url);
    }
}

?>
