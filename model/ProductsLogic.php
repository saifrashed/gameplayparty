<?php
require_once 'model/DataHandler.php';

class ProductsLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "stardunks", "root", "");
    }

    public function __destruct() {

    }

    public function readProduct($id) {


    }

    public function readProducts() {
        $result = $this->DataHandler->readsData('SELECT * FROM products;');

        return $result;
    }


    public function createProduct($name, $phone, $email, $adres) {

    }

    public function updateProduct($name, $phone, $email, $adres) {

    }

    public function searchProduct($query) {

    }

    public function deleteProduct($id) {

    }
}

?>
