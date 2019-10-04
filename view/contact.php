<?php include 'header.php' ?>

<div class="row">
    <div class="col-xs-12 col-md-6 contact-info">

        <h1>Service</h1>
        <p> Vragen? Neem contact met ons op. </p>

        <h1>Contact info</h1>
        <ul>
            <li>Utrecht</li>
            <li>lorem ipsum</li>
            <li>1111AA</li>
            <li>hanneke@loremipsum.com</li>
            <li>061234566</li>
        </ul>

        <?php echo $content ?>
    </div>

    <div class="col-xs-12 col-md-6 contact-image">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=utrecht&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.utilitysavingexpert.com">Utility Saving Expert</a></div>
            <style>.mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 600px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 600px;
                }</style>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>;
