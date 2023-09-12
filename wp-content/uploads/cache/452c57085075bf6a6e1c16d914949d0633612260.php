<div class="banner-top position-absolute w-100 top-0 d-none d-sm-block">
  <div class="container p-0">
    <div class="banner-top__box">
      <div class="row m-0 p-0 d-flex justify-content-between">
  
        <p class="banner-top__box__text"><i class="fa-solid fa-bullhorn"></i> <span class="edit">|</span>Wel-come to <span class="box-brand-text"> Security Guard </span> - We care About your selfity<span class="footer-brand-text"><i class="fa-solid fa-circle-left"></i><i class="fa-solid fa-circle-right"></i></span></p>
        
        <div class="banner-top__box__icons">
           <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#a9a9a9}</style><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
           <a href=""><i class="fa-brands fa-twitter"></i></a>
           <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
           <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
            
      </div>
    </div>
  </div>
</div>

<nav class="nav-primary navbar navbar-expand-lg position-absolute w-100 top-0 py-5">
  <div class="container p-0">
    <div class="navbar-box">

    <div class="navbar-brand-box">
    <i class="fa-solid fa-shield-halved"></i>
    <a class="navbar-brand" href="<?php echo site_url('/home'); ?>">hawk <br> <span class="brand">eye</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('/home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>

      </ul>
      <form class="d-flex search-box">
        <input class="form-control me-2" type="search" placeholder="Search here" aria-label="Search">
        <i class="fa-solid fa-magnifying-glass"></i>      
    </form>
    </div>

  </div>
</nav>


<header class="header">


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg2.jpg" />
    </div>
    <div class="carousel-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg2.jpg" />
    </div>
    <div class="carousel-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg2.jpg" />
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    
        <div class="header__text">
            <div class="row m-0 p-0">

            <div class="header__text__left col-sm-12 col-md-12 col-lg-7 col-xl-6">
                <h1 class="header__text__left--heading"><?php echo get_field('header_h1', 'option'); ?></h1>
                <hr class="text-br"></h1>
                <p class="header__text__left--text"><?php echo get_field('header_text', 'option'); ?></p>
                <div class="header__text__left__btns">
                    <button class="header__text__left__btns--read btn">Read More</button>
                    <button class="header__text__left__btns--show btn">Shop Now</button>
                </div>
            </div>

            <div class="header__text__right col-md-5 col-lg-5 col-xl-6 d-none d-sm-none d-md-none d-lg-block">
                <div class="header__text__right__img">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salute.png" />
                </div>
            </div>

            </div>
        </div>

        <div class="header__shadow-bg"></div>
</header>