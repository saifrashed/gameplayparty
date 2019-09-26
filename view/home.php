
<?php include 'header.php' ?>;

<div class="row center-xs start-md middle-xs about-block">
    <div class="col-xs-12 col-md-6 about-text">
        <h1>GamePlayParty</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere consectetur hendrerit. Morbi sodales
            non nisl vel tempus. Pellentesque ac eleifend nibh. Sed feugiat ante eu elit pretium laoreet. Phasellus
            auctor quis odio ac elementum. Praesent blandit ex sit amet nisl dapibus, et interdum enim venenatis.
            Vestibulum bibendum imperdiet orci vel imperdiet. Suspendisse potenti. Cras nunc risus, tempus sed quam vel,
            consectetur iaculis ex.
        </p>
        <a href="./?op=reservations" class="btn-link dark">Naar aanbod <i class="fas fa-arrow-circle-right"></i></a>
    </div>

    <div class="col-xs-12 col-md-6 about-image">
        <img src="./assets/img/lanparty.jpg">
    </div>
</div>


<div class="row start-xs middle-xs offers">

    <div class="col-xs-12 col-md-12">
        <h1>Bioscopen</h1>
    </div>

    <?php  echo $bioscopen ?>
</div>


<?php include 'footer.php' ?>;
