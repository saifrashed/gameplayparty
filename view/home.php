<?php include 'header.php' ?>

<div class="row center-xs start-md middle-xs about-block">
    <div class="about-text">
        <div class="align-left"> <?php echo $homeContent ?> </div>
        <a href="./?op=reservations" class="btn-link dark">Naar bioscopen <i class="fas fa-arrow-circle-right"></i></a>
    </div>

    <div class="about-image">
        <img src="./assets/img/lanparty.jpg">
    </div>
</div>


<div class="row start-xs middle-xs offers">

    <div class="col-xs-12 col-md-12">
        <h1>Bioscopen</h1>
    </div>

    <?php  echo $bioscopen ?>
</div>


<?php include 'footer.php' ?>
