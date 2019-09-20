
<div class="row center-xs middle-xs offers" style="margin-top: 200px; margin-bottom: 300px;">

    <div class="col-xs-12 col-md-12">
        <h1>Onze aanbod</h1>
    </div>

    <?php

    // Bioscopen worden weergeven uit de database.
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-xs-12 col-md-4">';
        echo '<a href="./?op=reservations&bioscoop='.$row['naam'].'">';
        echo '<img src="./assets/img/bioscopen/'.$row['bioscoop_id'].'.png">';
        echo '<h3>'.$row['naam'].'</h3>';
        echo '</a>';
        echo '</div>';
    }

    ?>
</div>
