<?php
require_once 'model/ProductsLogic.php';
require_once 'model/utilities.php';


class ProductsController {
    public function __construct() {
        $this->ProductsLogic = new ProductsLogic();
        $this->Utilities = new Utilities();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'create':
                    $this->collectCreateProduct();
                    break;
                case 'reads':
                    $this->collectReadProducts();
                    break;
                case 'read':
                    $this->collectReadProduct($_REQUEST['id']);
                    break;
                case 'update':
                    $this->collectUpdateProduct();
                    break;
                case 'delete':
                    $this->collectDeleteProduct($_REQUEST['id']);
                    break;
                case 'search':
                    $this->collectSearchProduct($_REQUEST['query']);
                    break;
                default:
                    $this->collectReadProducts();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();

        }

    }

    public function collectReadProduct($id) {

    }

    public function collectReadProducts() {
        $products = $this->ProductsLogic->readProducts();

        include './view/read_products.php';

        echo $this->Utilities->createTable($products);
    }

    public function collectCreateProduct() {
    }

    public function collectUpdateProduct() {
    }

    public function collectDeleteProduct($id){

    }

    public function collectSearchProduct($query) {

    }


}

