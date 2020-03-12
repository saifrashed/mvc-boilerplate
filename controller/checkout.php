<?php


require_once 'model/GeneralLogic.php';


class Checkout {

    public function __construct() {
        $this->General = new GeneralLogic();
    }

    /**
     * Index
     */
    public function index() {
        $this->order();
    }


    /**
     * Order tickets
     */
    public function order() {
        include './view/checkout/checkout_order.php';
    }

    /**
     * Order tickets
     */
    public function transaction() {
        include './view/checkout/checkout_transaction.php';
    }


}

