<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "<?php bloginfo('charset');?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
    <!-- Google fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="container st-container">
            <nav class="row st-navbar">

                <!-- Site logo -->
                <div class="col-4 col-lg-2 order-2 order-lg-1 st-logo-container">
                    <a href="<?php echo home_url();?>" class="st-logo">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/group-11.png" alt="">
                    </a>
                </div>

                <!-- Menu toggle button on mobile -->
                <div class="col-4 d-lg-none  order-1">
                    <div class="st-toggler--navbar-btn">
                        <div class="st-toggler-navbar-btn-burger">
                        </div>
                    </div>
                    <small class="st-toggler-note">MENI</small>
                </div>

                <!-- Navigation -->
                <div class="col-lg-8 order-4 order-lg-2 st-navbar-container">

                    <ul class="st-navbar-list">
                        <li class="st-menu-item st-menu-item-home"><a href="<?php echo home_url();?>" aria-current="page">Početna</a></li>
                        <li class="st-menu-item st-menu-item-oredring st-menu-item-has-children"><a title="Poručivanje" href="<?php echo home_url();?>" data-menu="#poručivanje">PORUČIVANJE</a></li>
                        <li class="st-menu-item st-menu-item-delivery"><a href="<?php echo home_url();?>">Dostava</a></li>
                        <li class="st-menu-item st-menu-item-locations st-menu-item-has-children"><a title="Lokacije" href="<?php echo home_url();?>" data-menu="#lokacije">Lokacije</a></li>
                        <li class="st-menu-item st-menu-item-gifts st-menu-item-has-children"><a title="Pokloni" href="<?php echo home_url();?>" data-menu="#pokloni">Pokloni</a></li>
                        <li class="st-menu-item st-menu-item-info st-menu-item-has-children"><a title="info-pult" href="<?php echo home_url();?>" aria-current="page" data-menu="#info-pult">INFO PULT</a></li>
                    </ul>
                          
                </div>

                <!-- Language & Cart -->
                <div class="col-4 col-lg-2 order-3 order-lg-3 st-navbar-right">

                    <!--language  -->
                    <ul class="st-lang d-none d-xl-flex">
	                    <li><a href="#" class="active">SRB</a></li>
	                    /
	                    <li><a href="#">ENG</a></li>
                    </ul>   

                    <!-- cart -->
                    <div class="st-cart-item">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/icon-fill.png" alt="">

                        <span class="st-cart-count">(1)</span>

                        <div class="d-lg-none st-cart-note">KORPA</div>
                    </div>
                </div>

            </nav>
         </div>
    </header>