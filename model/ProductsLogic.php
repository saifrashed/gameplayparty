<?php
require_once 'model/DataHandler.php';

class ProductsLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "stardunks", "root", "Rashed112");
    }

    public function __destruct() {

    }

    public function readProduct($id) {
        $result = $this->DataHandler->readData('SELECT * FROM products WHERE product_id=' . $id . ';');
        return $result;
    }

    public function readProducts($productsPerPage, $page) {
        $offset = $page * $productsPerPage;
        $result = $this->DataHandler->readsData('SELECT * FROM products LIMIT ' . $offset . ',' . $productsPerPage . ' ;');

        return $result;
    }

    public function createProduct($productName, $productPrice, $otherProductDetails, $supplierId, $productTypeCode) {
        $result = $this->DataHandler->createData('INSERT INTO products(product_name, product_price, other_product_details, supplier_id, product_type_code) 
                                                        VALUES("' . $productName . '",' . $productPrice . ',"' . $otherProductDetails . '",' . $supplierId . ',' . $productTypeCode . ');');
        return $result;
    }

    public function updateProduct($name, $phone, $email, $adres) {

    }

    public function searchProduct($query) {
        $result = $this->DataHandler->readData('SELECT * FROM products WHERE product_name LIKE "%' . $query . '%";');
        return $result;
    }

    public function deleteProduct($id) {
    }

    public function rowsCount() {
        $result = $this->DataHandler->readsData('SELECT * FROM products;');

        return $result->rowCount();
    }
}

?>
