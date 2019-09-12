

<div class="row ">
    <div class="col-xs-12 col-md-12 text-center ">
        <h1>Service</h1>
        <p> Vragen? Neem contact met ons op. </p>
    </div>


    <div class="col-xs-12 col-md-6 padding-left2  padding-top">
        <h1 class=""> Contact info</h1>
        <br>
    <ul class="">
        <ol> Utrecht</ol>
        <ol> wahedlaan 1</ol>
        <ol> 3552CX </ol>
        <ol> -example@example.com</ol>
        <ol> 061234566</ol>
        </ul>

    </div>

    <div class="col-xs-12 col-md-6 text-left padding-left padding-top">
        <img src="assets/img/customer.png" height="33%" length="33%" alt="customer">
    </div>

    <div id="googleMap" style="width:100%;height:400px;"></div>

    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</div>