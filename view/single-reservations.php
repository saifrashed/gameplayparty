<?php include 'header.php' ?>


<div class="row center-xs start-md middle-xs about-block">
    <div class="col-xs-12 col-md-6 about-image">
        <img src="./assets/img/bioscopen/<?php echo $bioscoop["bioscoop_id"]; ?>.png">
    </div>

    <div class="col-xs-12 col-md-6 about-text">
        <h1><?php echo $bioscoop["naam"]; ?></h1>
        <p>
            <?php echo $bioscoop["info"]; ?>
        <ul>
            <li>Adres: <?php echo $bioscoop["adres"]; ?>, <?php echo $bioscoop["bios_postcode"]; ?></li>
        </ul>
        </p>
    </div>
</div>


<div class="row center-xs middle-xs offers">
    <?php echo $zalen ?>
</div>

<?php include 'footer.php' ?>;
