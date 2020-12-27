<?php include 'header.php'; ?>

    <!-- BODY -->
    <body>
    <?php include 'navbar.php'; ?>
       <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Projects</h1>
                <p>MIT Creative is a team of professionals who work with a single motive – “Customer Delight”.</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Work -->
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/cbpGridGallery.js"></script>
        <div class="large-content" id="gallerybg">
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <!--// end row -->
                <?php
                $dirname = "img/projects/";
                $category = glob($dirname . '*' , GLOB_ONLYDIR);;
                $i=0;
                foreach($category as $cat)
                {
                    $dname = substr($cat, strpos($cat, '/', strpos($cat, '/')+1)+1, strlen($cat));
                    $did = preg_replace('/\s+/', '', $dname);
                    ?>
                    <div class="row margin-b-40" id="<?php echo $did; ?>">
                        <div class="col-sm-6">
                            <h2><?php echo ucwords($dname); ?></h2>
                        </div>
                    </div>
                    <?php
                    $images = glob($cat."/*.*");
                    ?>
                    <!-- Masonry Grid -->
                    <div id="<?php echo 'gal'.$i; ?>" class="gallery">
                        <section class="grid-wrap" style="margin:0;width:100%;max-width: 1140px;padding:0;">
                            <ul class="grid" style="margin: 0;-webkit-margin-before: 0; -webkit-margin-after:0;padding:0;">
                                <li class="grid-sizer"></li>
                        <?php
                        foreach($images as $image)
                        {?>
                                <!-- Work -->

                            <li><figure style="padding:5px;"><img src="<?php echo $image ?>" class="gpic"></figure></li>
                                <!-- End Work -->
                            <?php
                        }?>
                            </ul>
                        </section>
                        <section class="slideshow" style="display: none">
                            <ul>
                                <?php
                                foreach($images as $image)
                                {?>
                                    <li><figure><img src="<?php echo $image ?>" class="gpic img-responsive"></figure></li>
                                    <?php
                                }?>
                            </ul>
                            <nav>
                                <span class="icon nav-prev"></span>
                                <span class="icon nav-next"></span>
                                <span class="icon nav-close"></span>
                            </nav>
                            <div class="info-keys icon">Navigate with arrow keys</div>
                        </section>
                        <script>
                            new CBPGridGallery( document.getElementById( '<?php echo "gal".$i; ?>' ) );
                        </script>
                        <?php $i++ ; ?>
                    </div><br><br><br><br><br>
                <?php
                }?>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->

        <script src="js/classie.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>


        <!--========== END PAGE LAYOUT ==========-->
    <?php include 'footer.php'; ?>

    </body>
    <!-- END BODY -->
</html>