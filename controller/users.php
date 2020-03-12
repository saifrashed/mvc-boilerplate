<?php

/**
 * Redirect if not logged in
 */
if (!isset($_SESSION['id'])) {
    header("Location:" . ADMIN_LOGIN);
    exit;
}

require_once 'model/GeneralLogic.php';
require_once 'model/EventsLogic.php';


class Events {

    public function __construct() {
        $this->General = new GeneralLogic();
        $this->Events    = new EventsLogic();
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

                $columns = array(
                    'evenement_naam'     => 'Naam',
                    'evenement_begin'    => 'Begin',
                    'evenement_eind'     => 'Eind',
                    'evenement_locatie'  => 'Locatie',
                    'evenement_leeftijd' => 'Leeftijd',
                );

//        $columns = array(
//            'gebruiker_id'    => 'id',
//            'gebruiker_naam'  => 'Naam',
//            'gebruiker_email' => 'Email',
//            'omschrijving'    => 'Rol',
//        );


        $table = $this->General->displayDataTable($columns, $this->Events->reads(), true, true, 'events');

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

