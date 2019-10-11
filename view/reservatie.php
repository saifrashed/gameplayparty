<?php include 'header.php' ?>
<div class="form-group">
    <form action="/action_page.php">
        <label for="fname">Voornaam: </label>
        <input type="text" id="fname" class="form-control" name="firstname" placeholder="uw voornaam">
<br>
        <label for="lname">Achternaam: </label>
        <input type="text" id="lname" class="form-control" name="lastname" placeholder="uw achternaam">
<br>
        <label for="geslacht">Geslacht: </label>
        <select id="geslacht" class="form-control" name="geslacht">
            <option value="man">Man</option>
            <option value="vrouw">Vrouw</option>
            <option value="helicopter">Helicopter</option>
        </select>
<br>
        <label for="lname">Telefoonnummer: </label>
        <input type="text" id="nummer" class="form-control" name="nummer" placeholder="06-1234567">
        <br>
        <label for="lname">Datum: </label>
        <input type="date" id="date" class="form-control" name="date" placeholder="">
        <br>
        <label for="lname">Aantal: </label>
        <input type="number" id="aantal" class="form-control" name="aantal" placeholder="aantal">
        <br>
        <input type="submit" class="btn btn-primary" value="Bestel">
    </form>
</div>


<?php include 'footer.php' ?>;

