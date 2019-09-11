<?php
include 'view/header.php';
require_once 'controller/UserController.php';

$controller = new UserController();
$controller->handleRequest();

include 'view/footer.php';
