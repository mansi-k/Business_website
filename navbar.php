<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="index.php" style="width:220px;">
                        <p class="logo-img-main">
                        <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">MIT</span>
                        <span style="color: #fff; font-size: 22px; font-weight: bold;">CREATIVE</span>
                        </p>
                        <p class="logo-img-active">
                            <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">MIT</span>
                            <span style="color: #666; font-size: 22px; font-weight: bold;">CREATIVE</span>
                        </p>
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-item-child nav-item-hover" type="button" data-toggle="dropdown">Products
                                <span class="caret"></span>
                            </a>

                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="test" href="#">Signages <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="products.php#ACPsignages">ACP acrylic signage</a></li>
                                                <li><a href="products.php#ACPsignages">ACP signage</a></li>
                                                <li><a href="products.php#ACPsignages">Glow sign board</a></li>
                                                <li><a href="products.php#ACPsignages">Front-lit flex board</a></li>
                                                <li><a href="products.php#signages">Box-type flex board</a></li>
                                                <li><a href="products.php#signages">Neon signage</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" href="#">In-shops <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="products.php#InshopBranding">Vinyl on sunboard</a></li>
                                                <li><a href="products.php#InshopBranding">Frosted vinyl</a></li>
                                                <li><a href="products.php#InshopBranding">Vinyl sticker</a></li>
                                                <li><a href="products.php#InshopBranding">Translite print</a></li>
                                                <li><a href="products.php#InshopBranding">One-way vision</a></li>
                                                <li><a href="products.php#InshopBranding">Acrylic sandwich</a></li>
                                                <li><a href="products.php#CliponFrame">Clip-on frame</a></li>
                                                <li><a href="products.php#PhotoFrame">Photo frame</a></li>
                                                <li><a href="products.php#InshopBranding">Vinyl on plywood</a></li>

                                            </ul>
                                        </li>
                                    </ul>

                        </li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover" href="infrastructure.php">Infrastructure</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

<!--========== END HEADER ==========-->