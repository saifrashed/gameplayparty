<div class="row center-xs start-md middle-xs about-block">
    <div class="col-xs-12 col-md-6 about-text">
        <h1>GamePlayParty</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere consectetur hendrerit. Morbi sodales
            non nisl vel tempus. Pellentesque ac eleifend nibh. Sed feugiat ante eu elit pretium laoreet. Phasellus
            auctor quis odio ac elementum. Praesent blandit ex sit amet nisl dapibus, et interdum enim venenatis.
            Vestibulum bibendum imperdiet orci vel imperdiet. Suspendisse potenti. Cras nunc risus, tempus sed quam vel,
            consectetur iaculis ex.
        </p>
        <a href="./?op=reservations">Naar aanbod <i class="fas fa-arrow-circle-right"></i></a>
    </div>

    <div class="col-xs-12 col-md-6 about-image">
        <img src="./assets/img/lanparty.jpg">
    </div>
</div>


<div class="row center-xs middle-xs offers" style="margin-top: 200px; margin-bottom: 300px;">

    <div class="col-xs-12 col-md-12">
        <h1>Onze aanbod</h1>
    </div>

    <?php

    // Bioscopen worden weergeven uit de database.
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-xs-12 col-md-4">';
        echo '<img src="./assets/img/bioscopen/'.$row['bioscoop_id'].'.png">';
        echo '<h3>'.$row['naam'].'</h3>';
        echo '</div>';
    }

    ?>
</div>
