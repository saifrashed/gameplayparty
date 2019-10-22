<?php include './view/header.php' ?>

<div class="row start-xs">
    <div class="col-xs-12 col-md-2 admin-sidebar">
        <ul>
            <?php echo $navLinks ?>
        </ul>
    </div>

    <div class="col-xs-12 col-md-10 admin-display">
        <div class="admin-header">
            <h1><?php echo $_REQUEST['selectedPage'] ?></h1>
            <a class="btn btn-danger" href="./?op=logout">Uitloggen</a>
            <a class="btn btn-primary" href="./?op=register">Voeg gebruiker toe <i class="fas fa-user-plus"></i></a>
        </div>

        <form id="editor-form">
            <input name="op" value="author" type="hidden">
            <input name="selectedPage" value="<?php echo $_GET['selectedPage'] ?>" type="hidden">
            <input name="content" type="hidden">


            <div id="editor">
                <?php echo $content ?>
            </div>
            <button class="btn btn-secondary" type="submit">Bewerk tekst</button>
        </form>
    </div>
</div>


<?php include './view/footer.php' ?>
