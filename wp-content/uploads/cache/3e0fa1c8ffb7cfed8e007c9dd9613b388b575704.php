<main class="main">


    <section class="main__options">
        <div class="container-fluid m-0 p-0">
            <div class="main__options__content">
                <div class="row m-0 p-0">

        <?php
            $optionHome = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'option'
            ));
            
            while($optionHome->have_posts()) {
            $optionHome->the_post();?>


                    <div class="main__options__content__box col-md-3 col-lg-3 p-0">
                        <div class="row m-0 p-0">
                            <div class="main__options__content__box__icon">
                                <img src="<?php $optionsImg = get_field('option_image'); echo $optionsImg['url'] ?>" />
                            </div>
                            <div class="main__options__content__box__text">
                                <h5 class="main__options__content__box__text--heading"><?php the_title(); ?></h5>
                                <div class="div-separator">
                                    <hr class="line">
                                </div>
                                <p class="main__options__content__box__text--text"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>

        <?php }
        ?>


            </div>
            </div>
        </div>
    </section>

    <section class="main__about py-5">
        <div class="container">
            
            <div class="main__about__content">
                
                <div class="row m-0 p-0 d-flex justify-content-center">
                  <div class="main__about__content__left col-md-12 col-lg-8 m-0 p-0">
                    <div><?php echo get_field('about_h5', 'option'); ?></div>
                    <h3 class="section-head"><?php echo get_field('about_h3', 'option'); ?></h3>
                    <p class="main__about__content__left--text section-text"><?php echo get_field('about_text', 'option'); ?></p>
                    <p class="main__about__content__left--text section-text"><?php echo get_field('about_text2', 'option'); ?></p>
                
                <div class="row m-0 p-0 col-md-12">

                    <div class="main__about__content__left__points col-md-6 col-lg-6 p-0">
                        <div class="main__about__content__left__points--single">
                            <p class="point-num"><span class="point-box">01</span></p>
                            <p class="point-text">History Scince 1993</p>
                        </div>
    
                        <div class="main__about__content__left__points--single">
                            <p class="point-num"><span class="point-box">02</span></p>
                            <p class="point-text">25 Bodyguards For Security</p>
                        </div>
    
                        <div class="main__about__content__left__points--single">
                            <p class="point-num"><span class="point-box">03</span></p>
                            <p class="point-text">Best CCCTV Systems</p>
                        </div>
                    </div>
    
    
                    <div class="main__about__content__left__points col-md-6 col-lg-6 p-0">
    
                        <div class="main__about__content__left__points--single">
                            <p class="point-num"><span class="point-box">04</span></p>
                            <p class="point-text">History Scince 1993</p>
                        </div>
    
                        <div class="main__about__content__left__points--single">
                            <p class="point-num"><span class="point-box">05</span></p>
                            <p class="point-text">25 Bodyguards For Security</p>
                        </div>
    
                        <div class="main__about__content__left__points--single">
                            <p class="point-num"><span class="point-box">06</span></p>
                            <p class="point-text">Best CCCTV Systems</p>
                        </div>
                    </div>

                </div>

                </div>

                <div class="col-md-6 col-lg-4">
                <div class="main__about__content__right m-0 p-0">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/policee.png" />
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="main__services py-5">
        <div class="container">
            <div class="main__services__text">
                <h5 class="main__services__text--heading section-title"><span class="section-box"><?php echo get_field('security_h5', 'option'); ?></span></h5>
                <h3 class="main__services__text--sub-heading section-head"><?php echo get_field('security_h3', 'option'); ?></h3>
                <p class="main__services__text--text section-text"><?php echo get_field('security_text', 'option'); ?></p>
            </div>

            <div class="main__services__content">
                <div class="row m-0 p-0 d-flex justify-content-center">

                <?php
                
                $securityPost = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_type' => 'security'
                ));

                while($securityPost->have_posts()) {
                    $securityPost->the_post();?>

                
                <div class="main__services__content__single-box card col-sm-12 col-md-5 col-lg-3 card p-0">
                        <img src="<?php $securityPostImg = get_field('security_post'); echo $securityPostImg['url'] ?>" />

                        <div class="card-body">
                                <div class="card-left">
                                        <h3 class="card-head"><?php echo the_title();; ?></h3>
                                        <div class="div-separator">
                                        <hr class="line">
                                        </div>
                                        <p class="card-text"><?php echo the_content();; ?></p>
                                </div>
                                <div class="card-right">
                                    <a href="" class="card-box">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                        </div>
                </div>

                <?php  }
                ?>


                </div>

            </div>
            
        </div>
        <div class="shadow-bg"></div>   
    </section>

    <section class="main__faqs py-5">
        <div class="container">
            <div class="main__faqs__content">
                <div class="row m-0 p-0">

                    <div class="main__faqs__content__left col-lg">
                        <h3 class="main__faqs--heading"><?php echo get_field('faqs_header1', 'option'); ?></h3>
                        <div class="div-separator">
                            <hr class="line">
                        </div>

                        <?php echo do_shortcode('[sp_easyaccordion id="5"]'); ?>

                    </div>

                    <div class="main__faqs__content__right col-lg-1">
                    </div>

                    <div class="main__faqs__content__right col-lg">
                        <h3 class="main__faqs--heading"><?php echo get_field('faqs_header2', 'option'); ?></h3>
                        <div class="div-separator">
                            <hr class="line">
                        </div>


                        <div class="progress-box">

                            <div class="progress-info">
                                <p class="progress-text">Best CCTV's</p>
                                <p class="progress-per">75%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-info">
                                <p class="progress-text">Web Security</p>
                                <p class="progress-per">90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-info">
                                <p class="progress-text">Monitoring</p>
                                <p class="progress-per">60%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="progress-info">
                                <p class="progress-text">Guard House</p>
                                <p class="progress-per">80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>

                        </div>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="main__stats py-5">
        <div class="container">
            <div class="main__stats__content">
                <div class="row m-0 p-0">

                    <div class="main__stats__content__single-box col-md-6 col-lg-3">
                        <div class="main__stats__content__single-box__icon">
                            <div class="rec">
                                <i class="fa-solid fa-users"></i>                        
                            </div>
                        </div>
                        <p class="main__stats__content__single-box--count">612+</p>
                        <p class="main__stats__content__single-box--text">Happy Clients</p>
                    </div>

                    <div class="main__stats__content__single-box col-md-6 col-lg-3">
                        <div class="main__stats__content__single-box__icon">
                            <div class="rec">
                                <i class="fa-solid fa-clock"></i>                            </div>
                        </div>
                        <p class="main__stats__content__single-box--count">12+</p>
                        <p class="main__stats__content__single-box--text">Year Experience</p>
                    </div>

                    <div class="main__stats__content__single-box col-md-6 col-lg-3">
                        <div class="main__stats__content__single-box__icon">
                            <div class="rec">
                                <i class="fa-solid fa-user-secret"></i>      
                            </div>
                        </div>
                        <p class="main__stats__content__single-box--count">345+</p>
                        <p class="main__stats__content__single-box--text">Our Employers</p>
                    </div>

                    <div class="main__stats__content__single-box col-md-6 col-lg-3">
                        <div class="main__stats__content__single-box__icon">
                            <div class="rec">
                                <i class="fa-solid fa-earth-asia"></i>                            </div>
                        </div>
                        <p class="main__stats__content__single-box--count">18+</p>
                        <p class="main__stats__content__single-box--text">Offices Worldwide</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="main__gallery py-5">
        <div class="container">
            <div class="main__gallery__text">
                <div><?php echo get_field('gallery_h5', 'option'); ?></div>
                <h3 class="main__gallery__text--title"><?php echo get_field('gallery_h3', 'option'); ?></h3>
                <p class="main__gallery__text--text section-text"><?php echo get_field('gallery_text', 'option'); ?></p>
            </div>

            <div class="main__gallery__icons">
                <div class="row m-0 p-0">

                    <div class="col-lg-2"></div>

                    <div class="main__gallery__icons__box col-md-3 col-lg-2">
                        <div class="main__gallery__icons__box__top">
                        <i class="fa-solid fa-house-chimney-crack"></i>
                        </div>
                        <p class="main__gallery__icons__box--text">Home Security</p>
                    </div>

                    <div class="main__gallery__icons__box col-md-3 col-lg-2">
                        <div class="main__gallery__icons__box__top">
                        <i class="fa-solid fa-building"></i>                        
                        </div>
                        <p class="main__gallery__icons__box--text">Office Security</p>
                    </div>

                    <div class="main__gallery__icons__box col-md-3 col-lg-2">
                        <div class="main__gallery__icons__box__top">
                        <i class="fa-solid fa-user-secret"></i>                        
                        </div>
                        <p class="main__gallery__icons__box--text">Security Guard</p>
                    </div>

                    <div class="main__gallery__icons__box col-md-3 col-lg-2">
                        <div class="main__gallery__icons__box__top">
                        <i class="fa-solid fa-unlock"></i>                        
                        </div>
                        <p class="main__gallery__icons__box--text">Lockers</p>
                    </div>

                    <div class="col-lg-2"></div>


                </div>
            </div>

        </div>

        <div class="container-fluid m-0 p-0">
            <div class="main__gallery__content">
                <div class="main__gallery__content__imgs">
                    <div class="row m-0 p-0">

                        <div class="main__gallery__content__imgs__img-odd box-img col-sm-6 col-md-4 first col-lg p-0">
                            <div class="row m-0 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fbi.jpg" class="card-img-top" alt="...">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alarms.jpg" class="card-img-top" alt="...">
                            </div>
                        </div> 
                        
                        <div class="main__gallery__content__imgs__img-even box-img col-sm-6 col-md-4 col-lg p-0">
                            <div class="row m-0 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/policee.png" class="card-img-top" alt="...">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/police.jpg" class="card-img-top" alt="...">
                            </div>
                        </div> 

                        <div class="main__gallery__content__imgs__img-odd box-img col-sm-6 col-md-4 col-lg p-0">
                            <div class="row m-0 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protection.jpg" class="card-img-top" alt="...">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg1.jpg" class="card-img-top" alt="...">
                            </div>
                        </div> 
                        
                        <div class="main__gallery__content__imgs__img-even box-img col-sm-6 col-md-4 d-none d-lg-block d-xl-block d-xxl-block col-lg p-0">
                            <div class="row m-0 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guard.jpg" class="card-img-top" alt="...">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/repid.jpg" class="card-img-top" alt="...">
                            </div>
                        </div> 

                        <div class="main__gallery__content__imgs__img-even box-img col-sm-6 col-md-4 d-md-none d-lg-none d-xl-none p-0">
                            <div class="row m-0 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guard.jpg" class="card-img-top" alt="...">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/repid.jpg" class="card-img-top" alt="...">
                            </div>
                        </div> 

                        <div class="main__gallery__content__imgs__img-odd box-img col-sm-6 col-md-4 d-none d-lg-block d-xl-block d-xxl-block last col-lg p-0">
                            <div class="row m-0 p-0">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/secguard.jpg" class="card-img-top" alt="...">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg2.jpg" class="card-img-top" alt="...">
                            </div>
                        </div> 
                        


                    </div>
                </div>
            </div>
        </div>
            
    </section>
    
    <section class="main__store py-5">
        <div class="container">

            <div class="main__store__text">
                <div><?php echo get_field('store_h5', 'option'); ?></div>
                <h3 class="main__store__text--heading section-head"><?php echo get_field('store_h3', 'option'); ?></h3>
                <p class="main__store__text--text section-text"><?php echo get_field('store_text', 'option'); ?></p>
            </div>

            <div class="main__store__content">
                <div class="row m-0 p-0">

                <div class="col-lg-1"></div>

                <div class="main__store__content__box col-md col-lg-3 p-0">
                    <div class="main__store__content__box__img">
                        <div class="main__store__content__box__img__rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star empty-stars"></i>
                            <i class="fa-solid fa-star empty-stars"></i>
                        </div>
                        <div class="main__store__content__box__img--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store1.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    
                    <div class="main__store__content__box__text">
                            <div class="main__store__content__box__text__texting">
                                <p class="main__store__content__box__text__texting--heading">tower camera</p>
                                <div class="div-separator">
                                    <hr class="line">
                                </div>
                                <div class="main__store__content__box__text__texting__price">
                                    <div class="row m-0 p-0">
                                        <p class="main__store__content__box__text__texting__price--cost">$142</p>
                                        <p class="main__store__content__box__text__texting__price--promo">$250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main__store__content__box__text__icons">
                                <i class="fa-regular fa-heart"></i>                            
                                <i class="fa-solid fa-cart-shopping"></i>   
                            </div>                     
                    </div>
                </div>


                <div class="main__store__content__box col-md col-lg-3 p-0">
                    <div class="main__store__content__box__img">
                        <div class="main__store__content__box__img__rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star empty-stars"></i>
                            <i class="fa-solid fa-star empty-stars"></i>
                        </div>
                        <div class="main__store__content__box__img--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store2.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    
                    <div class="main__store__content__box__text">
                            <div class="main__store__content__box__text__texting">
                                <p class="main__store__content__box__text__texting--heading">tower camera</p>
                                <div class="div-separator">
                                    <hr class="line">
                                </div>
                                <div class="main__store__content__box__text__texting__price">
                                    <div class="row m-0 p-0">
                                        <p class="main__store__content__box__text__texting__price--cost">$142</p>
                                        <p class="main__store__content__box__text__texting__price--promo">$250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main__store__content__box__text__icons">
                                <i class="fa-regular fa-heart"></i>                            
                                <i class="fa-solid fa-cart-shopping"></i>   
                            </div>                     
                    </div>
                </div>


                <div class="main__store__content__box col-md col-lg-3 p-0">
                    <div class="main__store__content__box__img">
                        <div class="main__store__content__box__img__rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star empty-stars"></i>
                            <i class="fa-solid fa-star empty-stars"></i>
                        </div>
                        <div class="main__store__content__box__img--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store3.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    
                    <div class="main__store__content__box__text">
                            <div class="main__store__content__box__text__texting">
                                <p class="main__store__content__box__text__texting--heading">tower camera</p>
                                <div class="div-separator">
                                    <hr class="line">
                                </div>
                                <div class="main__store__content__box__text__texting__price">
                                    <div class="row m-0 p-0">
                                        <p class="main__store__content__box__text__texting__price--cost">$142</p>
                                        <p class="main__store__content__box__text__texting__price--promo">$250</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main__store__content__box__text__icons">
                                <i class="fa-regular fa-heart"></i>                            
                                <i class="fa-solid fa-cart-shopping"></i>   
                            </div>                     
                    </div>
                </div>

                <div class="col-lg-1"></div>


                </div>
            </div>

        </div>
    </section>

    <section class="main__testimonitals py-5">
        <div class="container">
            <div class="main__testimonitals__content">
                <div class="row m-0 p-0">

                    <div class="main__testimonitals__content__text col-lg-5">
                        <div><?php echo get_field('testimonital_h5', 'option'); ?></div>
                        <h3 class="main__testimonitals__content__text--head section-head"><?php echo get_field('testimonital_h3', 'option'); ?></h3>
                        <p class="main__testimonitals__content__text--text"><?php echo get_field('testimonital_text', 'option'); ?></p>
                    </div>
                    
                    <div class="main__testimonitals__content__slider col-lg-7 p-0">  
                        
                        <div class="slider-testimonitals">
                            <div class="row d-flex justify-content-end m-0 p-0">

                                <div class="main__testimonitals__content__slider__img col-sm-1 col-md-3 col-lg-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person3.jpg" class="card-img-top" alt="...">
                                    <div class="socials">
                                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/home?lang=pl"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://pl.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="main__testimonitals__content__slider__icon         col-md-1 col-lg-1 d-none d-sm-none d-md-block">
                                    <i class="fa-solid fa-quote-left"></i>               
                                </div>     
                                <div class="main__testimonitals__content__slider__text col-sm-2 col-md-8 col-lg-8">
                                    <p class="main__testimonitals__content__slider__text--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam consectetur qui laborum. Officia maxime ratione consectetur nam itaque eum saepe, obcaecati facere quo quisquam?</p>
                                    <div class="div-separator">
                                        <hr class="line">
                                    </div>
                                    <div class="main__testimonitals__content__slider__text__info">
                                        <p class="main__testimonitals__content__slider__text__info--person">joahn doe</p>
                                        <p class="main__testimonitals__content__slider__text__info--position">( Marketing ) </p>
                                    </div>
                                </div>
                                <button class="btn testimonital-btn"><i class="fa-solid fa-arrow-left"></i></button>
                                <button class="btn testimonital-btn"><i class="fa-solid fa-arrow-right"></i></button>
                            
                            </div>
                        </div>

                        <div class="slider-testimonitals">
                            <div class="row d-flex justify-content-end m-0 p-0">

                                <div class="main__testimonitals__content__slider__img col-sm-1 col-md-3 col-lg-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person3.jpg" class="card-img-top" alt="...">
                                    <div class="socials">
                                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/home?lang=pl"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://pl.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="main__testimonitals__content__slider__icon         col-md-1 col-lg-1 d-none d-sm-none d-md-block">
                                    <i class="fa-solid fa-quote-left"></i>               
                                </div>     
                                <div class="main__testimonitals__content__slider__text col-sm-2 col-md-8 col-lg-8">
                                    <p class="main__testimonitals__content__slider__text--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam consectetur qui laborum. Officia maxime ratione consectetur nam itaque eum saepe, obcaecati facere quo quisquam?</p>
                                    <div class="div-separator">
                                        <hr class="line">
                                    </div>
                                    <div class="main__testimonitals__content__slider__text__info">
                                        <p class="main__testimonitals__content__slider__text__info--person">joahn doe</p>
                                        <p class="main__testimonitals__content__slider__text__info--position">( Marketing ) </p>
                                    </div>
                                </div>
                                <button class="btn testimonital-btn"><i class="fa-solid fa-arrow-left"></i></button>
                                <button class="btn testimonital-btn"><i class="fa-solid fa-arrow-right"></i></button>
                            
                            </div>
                        </div>

                        <div class="slider-testimonitals">
                            <div class="row d-flex justify-content-end m-0 p-0">

                                <div class="main__testimonitals__content__slider__img col-sm-1 col-md-3 col-lg-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person3.jpg" class="card-img-top" alt="...">
                                    <div class="socials">
                                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/home?lang=pl"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://pl.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="main__testimonitals__content__slider__icon         col-md-1 col-lg-1 d-none d-sm-none d-md-block">
                                    <i class="fa-solid fa-quote-left"></i>               
                                </div>     
                                <div class="main__testimonitals__content__slider__text col-sm-2 col-md-8 col-lg-8">
                                    <p class="main__testimonitals__content__slider__text--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam consectetur qui laborum. Officia maxime ratione consectetur nam itaque eum saepe, obcaecati facere quo quisquam?</p>
                                    <div class="div-separator">
                                        <hr class="line">
                                    </div>
                                    <div class="main__testimonitals__content__slider__text__info">
                                        <p class="main__testimonitals__content__slider__text__info--person">joahn doe</p>
                                        <p class="main__testimonitals__content__slider__text__info--position">( Marketing ) </p>
                                    </div>
                                </div>
                                <button class="btn testimonital-btn"><i class="fa-solid fa-arrow-left"></i></button>
                                <button class="btn testimonital-btn"><i class="fa-solid fa-arrow-right"></i></button>
                            
                            </div>
                        </div>
                        
                        
                        
                    </div>

                
            </div>
        </div>
        <div class="shadow-bgc"></div>   
    </section>

    <section class="main__team py-5">
        <div class="container">
            <div class="main__team__text">
                <div><?php echo get_field('team_h5', 'option'); ?></div>
                <h3 class="main__team__text--head section-head"><?php echo get_field('team_h3', 'option'); ?></h3>
                <p class="main__team__text--text section-text"><?php echo get_field('team_text', 'option'); ?></p>
            </div>

            <div class="main__team__content">

                <div class="splide" aria-label="Splide Basic HTML Example">

                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/police1.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ajay s.</h5>
                                        <div class="div-separator">
                                            <hr class="line">
                                        </div>
                                        <p class="card-text">Body guard</p>
                                    </div>
                                </div>
                            </li>

                            <li class="splide__slide col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/police1.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ajay s.</h5>
                                        <div class="div-separator">
                                            <hr class="line">
                                        </div>
                                        <p class="card-text">Body guard</p>
                                    </div>
                                </div>
                            </li>

                            <li class="splide__slide col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/police1.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ajay s.</h5>
                                        <div class="div-separator">
                                            <hr class="line">
                                        </div>
                                        <p class="card-text">Body guard</p>
                                    </div>
                                </div>
                            </li>

                            <li class="splide__slide col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/police1.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ajay s.</h5>
                                        <div class="div-separator">
                                            <hr class="line">
                                        </div>
                                        <p class="card-text">Body guard</p>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="splide__arrows splide__arrows--ltr">
                        <button
                        class="splide__arrow splide__arrow--prev"
                        type="button"
                        aria-label="Previous slide"
                        aria-controls="splide01-track"
                        >
                        <i class="fa-solid fa-arrow-left"></i>
                        <button
                        class="splide__arrow splide__arrow--next"
                        type="button"
                        aria-label="Next slide"
                        aria-controls="splide01-track"
                        >
                        <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="main__blog py-5">
        <div class="container">
            <div class="main__blog__text">
                <div><?php echo get_field('blog_h5', 'option'); ?></div>
                <h3 class="main__blog__text--head section-head"><?php echo get_field('blog_h3', 'option'); ?></h3>
                <p class="main__blog__text--text section-text"><?php echo get_field('blog_text', 'option'); ?></p>
            </div>

            <div class="main__blog__content">
                <div class="row m-0 p-0 d-flex justify-content-center">


                    <?php
                        $args = array( 'post_type' => 'post',
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                ?>
                             

                             <div class="col-1"></div>


                                <div class="card col-md col-lg p-0">
                                    <div class="card-img">
                                        <img class="img-fluid" src="<?php $optionsImg = get_field('blog_image'); echo $optionsImg['url'] ?>" />
                                        <div class="card-date">
                                            <div class="card-date-box">
                                                <p class="date-day"><?php the_time('j'); ?><span class="date-month"><?php the_time('M'); ?></span></p>
                                            </div>
                                        </div>
                                        <div class="card-info">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.jpg" class="card-img-top" alt="...">
                                            <p class="card-author"> BY  -  <?php the_author_posts_link(); ?> </p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php the_content(); ?></p>
                                        <a href="#" class="btn card-body-btn p-0">Read more <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row m-0 p-0">
                                            <div class="footer-box">
                                                <div class="footer-single col-md col-4">
                                                        <i class="fa-solid fa-eye"></i>
                                                        <p class="footer-single-text">20,145</p>
                                                </div>
                                                <div class="footer-single col-md col-4">
                                                        <i class="fa-solid fa-thumbs-up"></i>
                                                        <p class="footer-single-text">2,456</p>
                                                </div>
                                                <div class="footer-single col-md col-4">
                                                        <i class="fa-solid fa-comments"></i>
                                                        <p class="footer-single-text">456</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                                            
                            <?php }}
                            wp_reset_postdata();
                            ?>

                

                    
                </div>
            </div>

        </div>
        <div class="shadow-bgc"></div>   
    </section>

    <section class="main__brands py-5">
        <div class="container">

            <div class="splide splide-brands" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                      <ul class="splide__list">
                        
                        <li class="splide__slide splide-slide">
                            <div class="brand-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand1.png" class="card-img-top" alt="...">
                            </div>
                        </li>

                      </ul>
                </div>

                <div class="splide__arrows splide__arrows--ltr">
                    <button
                    class="splide__arrow splide__arrow--prev"
                    type="button"
                    aria-label="Previous slide"
                    aria-controls="splide01-track"
                    >
                    <i class="fa-solid fa-arrow-left"></i>
                    <button
                    class="splide__arrow splide__arrow--next"
                    type="button"
                    aria-label="Next slide"
                    aria-controls="splide01-track"
                    >
                    <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            
        </div>
    </section>

    <section class="main__comments py-5">
        <div class="container">
            <div class="main__comments__content">
    
                    <section class="splide splide-comments" aria-label="Przykład podstawowej struktury">
                        <div class="splide__track">
                          <ul class="splide__list">

                            <li class="splide__slide col-lg-12">
                                <div class="row m-0 p-0">
                                    <div class="main__comments__content__logo col-sm-2 col-md col-lg-1">
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                                <div class="main__comments__content__text col-sm-10 col-md-10 col-lg-10">
                                    <p class="main__comments__content__text--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officia laboriosam deleniti consectetur totam! Aliquam, minima? Officiis aliquid illo nesciunt ullam, neque harum molestiae iste in accusantium soluta molestias nam?</p>
                                    <p class="main__comments__content__text--author">by Ajay Suryavanshi - 2 min ago</p>
                                </div>
                                </div>
                            </li>

                            <li class="splide__slide col-lg-12">
                                <div class="row m-0 p-0">
                                    <div class="main__comments__content__logo col-sm-2 col-md col-lg-1">
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                                <div class="main__comments__content__text col-sm-10 col-md-10 col-lg-10">
                                    <p class="main__comments__content__text--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officia laboriosam deleniti consectetur totam! Aliquam, minima? Officiis aliquid illo nesciunt ullam, neque harum molestiae iste in accusantium soluta molestias nam?</p>
                                    <p class="main__comments__content__text--author">by Ajay Suryavanshi - 2 min ago</p>
                                </div>
                                </div>
                            </li>

                            <li class="splide__slide col-lg-12">
                                <div class="row m-0 p-0">
                                    <div class="main__comments__content__logo col-sm-2 col-md col-lg-1">
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                                <div class="main__comments__content__text col-sm-10 col-md-10 col-lg-10">
                                    <p class="main__comments__content__text--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officia laboriosam deleniti consectetur totam! Aliquam, minima? Officiis aliquid illo nesciunt ullam, neque harum molestiae iste in accusantium soluta molestias nam?</p>
                                    <p class="main__comments__content__text--author">by Ajay Suryavanshi - 2 min ago</p>
                                </div>
                                </div>
                            </li>

                            

                            
                            
                          </ul>
                          <div class="splide__arrows splide__arrows--ltr">
                              <button
                              class="splide__arrow splide__arrow--prev"
                              type="button"
                              aria-label="Previous slide"
                              aria-controls="splide01-track"
                              >
                              <i class="fa-solid fa-arrow-up"></i>                            
                              </button>
                              <button
                              class="splide__arrow splide__arrow--next"
                              type="button"
                              aria-label="Next slide"
                              aria-controls="splide01-track"
                              >
                              <i class="fa-solid fa-arrow-down"></i>                            
                              </button>
                          </div>
                        </div>


                    </section>
                    
            </div>
        </div>
    </section>

    <section class="main__contact py-5">
        <div class="container">
            <div class="main__contact__content">
                <div class="row m-0 p-0">

                    <div class="main__contact__content__box col-md-6 col-lg-3">
                        <div class="brand-contact">
                            <i class="fa-solid fa-shield-halved"></i>
                            <a class="icon-brand" href="#">hawk <br> <span class="brand">eye</span></a>
                        </div>
                        <p class="main__contact__content__box--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa optio numquam, amet quam accusamus.</p>
                        <p class="main__contact__content__box--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn main__contact__content__box--link p-0">Read more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="main__contact__content__box col-md-6 col-lg-3">
                        <h5 class="main__contact__content__box--heading">useful links</h5>
                        <div class="div-separator">
                            <hr class="line">
                        </div>
                        <a class="main__contact__content__box--text-link"><i class="fa-regular fa-circle-dot"></i>Technical Security Surveys</a>
                        <a class="main__contact__content__box--text-link"><i class="fa-regular fa-circle-dot"></i>CCTV System Network</a>
                        <a class="main__contact__content__box--text-link"><i class="fa-regular fa-circle-dot"></i>Mobile Patrol Management</a>
                        <a class="main__contact__content__box--text-link"><i class="fa-regular fa-circle-dot"></i>Sceurity Includ</a>
                        <a class="main__contact__content__box--text-link"><i class="fa-regular fa-circle-dot"></i>Access Control System</a>

                    </div>

                    <div class="main__contact__content__box col-md-6 col-lg-3">
                        <h5 class="main__contact__content__box--heading">latest news</h5>
                        <div class="div-separator">
                            <hr class="line">
                        </div>

                        <div class="main__contact__content__box__news m-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fbi.jpg" class="card-img-top" alt="...">
                            <div class="main__contact__content__box__news__info">
                                <p class="main__contact__content__box__news__info--head">Lorem ipsum dolor sit amet.</p>
                            <p class="main__contact__content__box__news__info--date">12 June 018</p>
                            </div>
                        </div>

                        <div class="main__contact__content__box__news m-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fbi.jpg" class="card-img-top" alt="...">
                            <div class="main__contact__content__box__news__info">
                                <p class="main__contact__content__box__news__info--head">Lorem ipsum dolor sit amet.</p>
                            <p class="main__contact__content__box__news__info--date">12 June 018</p>
                            </div>
                        </div>

                    </div>

                    <div class="main__contact__content__box col-md-6 col-lg-3">
                        <h5 class="main__contact__content__box--heading">newslatter</h5>
                        <div class="div-separator">
                            <hr class="line">
                        </div>
                        <div class="label-mail">
                            <div class="row m-0 p-0">
                                <input type="text" id="disabledTextInput" class="form-control col-10" placeholder="Your Email">
                                <a href="" class="btn btn-outline col-2"><i class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div>

                        <div class="main__contact__content__box__newslatter">
                            <div class="row m-0 p-0">
                                <i class="fa-solid fa-paper-plane"></i>
                                <p class="main__contact__content__box__newslatter--text">512-omexcity, California</p>
                            </div>
                        </div>

                        <div class="main__contact__content__box__newslatter">
                            <div class="row m-0 p-0">
                                <i class="fa-solid fa-phone"></i>                                
                                <p class="main__contact__content__box__newslatter--text">512-omexcity, California</p>
                            </div>
                        </div>

                        <div class="main__contact__content__box__newslatter">
                            <div class="row m-0 p-0">
                                <i class="fa-regular fa-envelope"></i>                                
                                <p class="main__contact__content__box__newslatter--text">512-omexcity, California</p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>

    
</main>