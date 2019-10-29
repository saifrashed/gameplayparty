<?php include 'header.php' ?>

<div class="row center-xs middle-xs offers">

    <div class="col-xs-12 col-md-12">
        <h1>Onze locaties</h1>
        <?php 
            while ($row = $content->fetch(PDO::FETCH_ASSOC)) {
            echo $row['pagina_content'];
            }
        ?>
    </div>

    <?php echo $bioscopen ?>
</div>

<?php include 'footer.php' ?>;
