<!DOCTYPE html>
<html lang="en">

<head>

    <title>GamePlayParty</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,900i&display=swap" rel="stylesheet">

    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/grids/grids.css">
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
    <div class="btn-menu not-active">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div class="menu">

    <a class="menu-login" href="?op=login"><i class="fas fa-users"></i> login</a>

    <nav class="menu-list">
        <ul>
            <li><a href="?op=home">Home</a></li>
            <li><a href="?op=reservations">Reserveren</a></li>
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
                case 'contact':
                    echo '<h1>Contact</h1>';
                    break;
                case 'admin':
                    echo '<h1>Beheerder</h1>';
                    break;
                case 'employee':
                    echo '<h1>Bioscoop Beheer</h1>';
                    break;
                case 'author':
                    echo '<h1>Redacteur</h1>';
                    break;
                case 'faq':
                    echo '<h1>Veelgestelde vragen</h1>';
                    break;
                default:
                    echo '<h1>GamePlayParty</h1>';
            }
            ?>
            <p>Power to the players</p>
            <a href="./?op=reservations" class="btn-link light">Bekijk bioscopen</a>
        </div>
    </div>
</div>

<div class="container-fluid">

