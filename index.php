<?php
include 'view/header.php';
require_once 'controller/ProductsController.php';

$controller = new ProductsController();
$controller->handleRequest();

include 'view/footer.php';
?>
