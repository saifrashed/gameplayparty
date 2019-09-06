<?php
include 'view/header.php';
require_once 'controller/BookingController.php';

$controller = new BookingController();
$controller->handleRequest();

include 'view/footer.php';
