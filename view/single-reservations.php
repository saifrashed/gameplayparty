<?php include 'header.php' ?>;

<div class="row center-xs middle-xs offers">

    <div class="row center-xs  offers">

        <div class="col-xs-12 col-md-6">
            <img src="./assets/img/bioscopen/<?php echo $bioscoop["bioscoop_id"]; ?>.png">
        </div>

        <div class="col-xs-12 col-md-6">
            <h1><?php echo $bioscoop["naam"]; ?></h1>
            <?php echo $bioscoop["info"]; ?>
            <?php echo $bioscoop["adres"]; ?>
            <?php echo $bioscoop["postcode"]; ?>
        </div>


        <div class="row center-xs middle-xs offers">
            <?php echo $zalen ?>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>;
