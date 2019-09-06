<?php
/**
 * Header
 * User: saifeddine
 * Date: 2019-02-18
 * Time: 15:32
 */

session_start();

switch ($_SERVER['PHP_SELF']) {
    default:
        $title = 'Stardunks';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Stardunks</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./view/assets/css/grids.css">
    <link rel="stylesheet" type="text/css" href="./view/assets/css/style.css">
</head>

<body>

<div class="container-fluid">