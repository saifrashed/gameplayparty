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

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/grids.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>


<header class="main-header">
    <div class="header-logo">
        <a href="./?op=home">
            <img src="./assets/img/logo.svg">
        </a>
    </div>
</header>


<div class="box">
    <div class="btn not-active">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div class="menu">
    <nav class="menu-list">
        <ul>
            <li><a href="?op=home">Home</a></li>
            <li><a href="?op=reservations">Reserveren</a></li>
            <li><a href="?op=about">Over ons</a></li>
            <li><a href="?op=contact">Contact</a></li>
        </ul>
    </nav>
</div>


<div class="row center-xs slider">
    <div class="col-xs-12 col-md-12">
        <div class="slider-caption">
            <?php
            switch ($_REQUEST['op']) {
                case 'home':
                    echo '<h1>GamePlayParty</h1>';
                    break;
                case 'reservations':
                    echo '<h1>Reserveren</h1>';
                    break;
                case 'about':
                    echo '<h1>Over ons</h1>';
                    break;
                case 'contact':
                    echo '<h1>Contact</h1>';
                    break;
                default:
                    echo '<h1>GamePlayParty</h1>';
            }
            ?>
            <p>Voor uw beste game ervaringen.</p>
            <a href="./?op=reservations">Reserveer nu</a>
        </div>
    </div>
</div>

<div class="container-fluid">

