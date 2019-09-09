<?php
/**
 * Header
 * User: saifeddine
 * Date: 2019-02-18
 * Time: 15:32
 */

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>GamePlayParty</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/css/grids.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

<div class="container-fluid">

    <div class="row">
        <header class="col-xs-12">
            <div class="col-xs-12 col-md-4 header-logo">
                <img src="./assets/img/logo.svg">
            </div>
            <nav class="col-xs-12 col-md-8 menu-desktop">
                <ul>
                    <li><a href="?op=home">Home</a></li>
                    <li><a href="?op=reservations">Reserveren</a></li>
                    <li><a href="?op=about">Over ons</a></li>
                    <li><a href="?op=contact">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
