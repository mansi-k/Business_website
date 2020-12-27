<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title">Contact</h1>
        <p>MIT Creative is a team of professionals who work with a single motive – “Customer Delight”. <br>We are a young team who have made a mark in 3 years of our existence.</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container">
        <div class="row contact">
            <!-- Contact List -->
            <div class="col-sm-6 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h2>Our Presence in India</h2>
                    <img src="img/map.jpg" class="img-responsive">
                </div>
            </div>
            <!-- End Contact List -->

            <!-- Contact List -->
            <div class="col-sm-6 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h2>H.O.</h2>
                    <b>Address</b><p>Ideal Trade Center, Shop No. 2, Sect. 11, CBD Belapur, Navi Mumbai – 400614 </p>
                    <b>Phone No</b><p>022-27572495, 022-27560060</p>
                    <b>Mail</b><p> info@mitcreative.com, sales@mitcreative.com, accounts@mitcreative.com</p>
                    <b>Website</b><p>www.mitcreative.com</p><br><br>
                    <h2>Workshop</h2>
                    <b>Address</b><p>Shree Samarth Krupa Apt, Plot- B/181, Sect. 20, CBD Belapur, Navi Mumbai – 400614</p>
                </div>
            </div>
            <!-- End Contact List -->
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Contact List -->

<!-- Google Map -->
<div id="map" class="map height-400"></div>
<script src="js/components/gmap.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>
</body>
<?php include 'footer.php';