<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>i-Gasikara.mg </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.jpg">

    <?php echo $this->template->stylesheet; ?>


</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="yummy-load"></div>
</div>

<!-- Background Pattern Swither -->
<!--<div id="pattern-switcher">-->
<!--    Bg Pattern-->
<!--</div>-->
<!--<div id="patter-close">-->
<!--    <i class="fa fa-times" aria-hidden="true"></i>-->
<!--</div>-->


<!-- ****** Header Area Start ****** -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-12">
                <div class="logo_area text-center">
                    <a href="<?php echo base_url();  ?>" class="yummy-logo"><img style="width: 90px;" src="<?php echo base_url() ?>assets/img/logo.png" alt="">&nbsp;i-Gasikara</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                    <!-- Menu Area Start -->
                    <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                        <ul class="navbar-nav" id="yummy-nav">
                            <li class="nav-item active">
                                <a class="nav-link page-scroll" href="#section-home">Candidats <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#section-video">Vidéos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#section-actu">Actualités</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#portfolio">Partenaires</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ****** Header Area End ****** -->

<!-- ****** Welcome Post Area Start ****** -->
<section class="welcome-post-sliders owl-carousel" id="section-home">

    <!-- Single Slide -->
    <?php foreach(range(1,5) as $i){ ?>
    <div class="welcome-single-slide">
        <!-- Post Thumb -->
        <img src="<?php echo base_url() ?>assets/img/candidat/<?php echo $i ?>.jpg" alt="">
        <!-- Overlay Text -->
        <div class="project_title">
            <div class="post-date-commnents d-flex">
                <a href="#">May 19, 2017</a>
                <a href="#">5 Comment</a>
            </div>
            <a href="#">
                <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
            </a>
        </div>
    </div>
    <?php } ?>


</section>
<!-- ****** Welcome Area End ****** -->

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <h3>Les jeunes sont le présent, pas seulement l'avenir</h3>
                    <p style="text-align: justify;">« La jeunesse c’est l’avenir de demain » comme on aime le dire, cette expression qui me semblait flatteuse, valorisante au début, au fil du temps me paraît plutôt comme une infantilisation de la jeunesse, utilisée dans le but de nous materner. Pourtant, il faut bien que la société et/ou les “vieux“ se rendent bien compte qu’ils ne sont pas nos papas ou nos mamans. Tel cet enfant qui apprend à marcher en tombant, nous jeunes nous devons faire nos preuves en s’essayant, à des postes de gestion, de décisions, de pouvoir etc…</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Categories Area End ****** -->

<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80"  id="section-video">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row">

                    <!-- Single Post -->
                    <div class="col-12">
                        <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                            <!-- Post Thumb -->
                            <div class="post-thumb" id="display-video">
                                <?php foreach($videos as $video){ ?>
                                <?php if($video->categorieVideo == 1 ){ ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo str_ireplace('watch?v=', 'embed/', $video->contenuVideo); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                        <!-- Single Post -->
                        <div class="col-12">
                            <section class="welcome-post-sliders owl-carousel">

                                <?php foreach($videos as $video){ ?>
                                <?php if($video->categorieVideo != 1 ){ ?>
                            <div class="single-post wow fadeInUp" data-wow-delay=".4s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <div class="overlay-hidden" data-id="<?php echo $video->idVideo; ?>"></div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?php echo str_ireplace('watch?v=', 'embed/', $video->contenuVideo); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                                    <?php } ?>
                                <?php } ?>
                            </section>
                        </div>


                </div>
            </div>

            <!-- ****** Blog Sidebar ****** -->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="blog-sidebar mt-5 mt-lg-0">
                    <!-- Single Widget Area -->
                    <div class="single-widget-area about-me-widget text-center" style="box-shadow: 1px 5px 10px #222;padding: 15px;">
                        <div class="widget-title">
                            <h6>Actualité</h6>
                        </div>
                        <div class="about-me-widget-thumb">
                            <img src="<?php echo base_url() ?>assets/img/candidat/6.jpg" alt="">
                        </div>
                        <p>Dama du Groupe « Mahaleo » : Candidature officialisée !</p>
                    </div>


                    <!-- Single Widget Area -->
                    <div class="single-widget-area popular-post-widget" style="box-shadow: 1px 2px 10px #222;padding: 15px;">
                        <div class="widget-title text-center">
                            <h6>Fichiers téléchargeable</h6>
                        </div>
                        <?php foreach($files as $file){ ?>
                        <div class="single-populer-post d-flex">
                            <img src="<?php echo base_url() ?>assets/img/pdf.png" style="width: 60px!important;flex-basis: 0%!important;"  alt="">
                            <div class="post-content">
                                <a>
                                    <h6><?php echo str_ireplace('.pdf', ' ', $file->titreFile); ?></h6>
                                </a>
                                <p><a style="cursor:pointer;font-size: 11px;" class="file-popup-vertical-fit" href='<?php echo $file->sourceFile; ?>'>visualiser</a> | <a style="cursor:pointer;font-size: 11px;" href='<?php echo $file->sourceFile; ?>'>télécharger</a></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget text-center" style="box-shadow: 1px 2px 10px #222;">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbiancomadagascar&tabs=Bianco%20Madagascar&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=153031145381268" width="340" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area newsletter-widget" style="box-shadow: 1px 2px 10px #222;padding: 15px;">
                        <div class="widget-title text-center">
                            <h6>Liste electorale &nbsp; <span style="font-size:10px;">vérifiez si vous etes inscrit</span></h6>
                        </div>
                        <div class="newsletter-form">
                            <form>
                                <input type="text" name="newsletter-email" id="input-cin" placeholder="Entrer votre numero CIN">
                                <button type="button" id="search-electoral"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Blog Area End ****** -->

<!-- ****** Instagram Area Start ****** -->
<div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/us-embassy.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/bianco.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/ue.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/eces.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/ceni.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/nationsunies.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Item -->
    <div class="instagram_gallery_item">
        <!-- Instagram Thumb -->
        <img src="<?php echo base_url() ?>assets/img/samifin.jpg" alt="">
        <!-- Hover -->
        <div class="hover_overlay">
            <div class="yummy-table">
                <div class="yummy-table-cell">
                    <div class="follow-me text-center">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i> visiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ****** Our Creative Portfolio Area End ****** -->


<!-- ****** Footer Menu Area Start ****** -->
<footer class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-content">

                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Copywrite Text -->
                <div class="copy_right_text text-center">
                    <p>Copyright @2018 Tout droit reservé | 5R HACKATHON </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php echo $this->template->javascript; ?>


</body>
