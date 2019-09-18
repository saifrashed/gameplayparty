<div class="row start-xs">
    <div class="col-xs-12 col-md-12" style="min-height: 150vh;">
        <h1> Welcome <?php echo $_SESSION['voornaam'] . ' ' . $_SESSION['achternaam'] ?></h1>
        <p>U bent de <?php echo $this->UserLogic->getRole($_SESSION['id']) ?></p>
    </div>
</div>
