<?php

/**
 * Redirect if not logged in
 */
if (!isset($_SESSION['id'])) {
    header("Location:" . ADMIN_LOGIN);
    exit;
}

require_once 'model/GeneralLogic.php';


class Events {

    public function __construct() {
        $this->General = new GeneralLogic();
    }

    /**
     * Index
     */
    public function index() {
        $this->reads();
    }


    /**
     * Reads a project
     */
    public function reads() {
        include './view/layout/header.php';
        include './view/layout/sidebar.php';
        include './view/events/event_reads.php';
        include './view/layout/footer.php';
    }

    /**
     * Creates a project
     */
    public function create() {
        include './view/layout/header.php';
        include './view/layout/sidebar.php';
        include './view/events/event_create.php';
        include './view/layout/footer.php';
    }

    /**
     * Creates a project
     */
    public function update() {
        include './view/layout/header.php';
        include './view/layout/sidebar.php';
        include './view/events/event_update.php';
        include './view/layout/footer.php';
    }


    /**
     * Deletes a project
     */
    public function delete() {
        include './view/events/event_order.php';
    }
}

