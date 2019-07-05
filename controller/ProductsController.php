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
                    $this->collectCreateProduct($_REQUEST['product_name'],$_REQUEST['product_price'],$_REQUEST['other_product_details'],$_REQUEST['supplier_id'],$_REQUEST['product_type_code']);
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
        $product = $this->ProductsLogic->readProduct($id);
        include './view/read_product.php';
        echo $this->Utilities->createTable($product);
    }

    public function collectReadProducts() {
        $productPerPage = 5;
        $amountPages = $this->ProductsLogic->rowsCount() / $productPerPage;

        if(!empty($_REQUEST['page'])) {
            $products = $this->ProductsLogic->readProducts($productPerPage, $_REQUEST['page']);
        } else {
            $products = $this->ProductsLogic->readProducts(5, 0);

        }

        include './view/read_products.php';

        echo $this->Utilities->createTable($products, $amountPages);
    }

    public function collectCreateProduct($productName = '', $productPrice = 0, $otherProductDetails = '', $supplierId = 0, $productTypeCode = 0) {

        if(!empty($productName) && !empty($otherProductDetails)) {
            var_dump($this->ProductsLogic->createProduct($productName, $productPrice, $otherProductDetails, $supplierId, $productTypeCode));
        } else {
            $message = 'Fill all fields';
        }

        include './view/new_product.php';

        echo $message ;
    }

    public function collectUpdateProduct() {
    }

    public function collectDeleteProduct($id){

    }

    public function collectSearchProduct($query) {
        $products = $this->ProductsLogic->searchProduct($query);
        include './view/search.php';

        if($products->rowCount()) {
            echo $this->Utilities->createTable($products);
        } else {
            echo 'No results';
        }
    }
}

