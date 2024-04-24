<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body class="for-home">

    <main class="home">
        <!-- Banner Video -->
        <section class="common-banner-video">
            <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>assets/media/images/templates/temp-banner-cover.png" class="w-100">
                <source src="<?= base_url(); ?>assets/media/videos/homepage-banner-desktop.mp4" type="video/mp4" class="w-100">
            </video>
        </section>

        <section class="common-banner-video-for-mobile mt-0 mb-0">
            <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>" class="w-100">
                <source src="<?= base_url(); ?>assets/media/videos/homepage-banner-mobile.mp4" type="video/mp4" class="w-100">
            </video>
        </section>
        <!-- Banner Video -->

        <!-- Introduction: RT-C -->
        <section class="common-introduction-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="391" height="auto" viewBox="0 0 391 663" fill="none" id="f-intro-home">
                <g opacity="0.7">
                    <path class="path-for-ftv-intro-home" d="M148.849 282.798L225.615 282.489V301.603H149.201H147.701V303.103V639.926V641.426H149.201H225.615V660.59H1.5V641.426H74.1527H75.6527V639.926V303.103V301.603H74.1527H1.5V282.483H74.1527H75.6527V280.983V233.833C75.6527 151.73 92.6922 93.6401 121.046 56.1106C149.354 18.6406 189.064 1.5 234.862 1.5C253.428 1.5 273.27 5.7817 288.419 15.5774C303.501 25.33 313.962 40.5525 313.962 62.6895C313.962 71.7506 309.431 79.2873 302.85 84.6007C296.251 89.9289 287.681 92.9387 279.864 92.9387C267.234 92.9387 257.804 88.5204 251.505 81.0823C245.177 73.6092 241.869 62.919 241.869 50.1525C241.869 45.5192 243.443 42.9679 245.274 40.0011C245.348 39.8806 245.423 39.7595 245.498 39.6374C247.485 36.4076 249.571 32.755 249.571 26.106C249.571 23.9359 247.749 22.6028 246.049 21.8052C244.227 20.9507 241.815 20.3527 239.306 19.9255C234.259 19.0662 228.39 18.8295 224.966 18.8295C201.148 18.8295 181.684 33.2774 168.255 59.6184C154.846 85.922 147.343 124.248 147.343 172.575V281.298V282.804L148.849 282.798Z" stroke="url(#paint0_linear_532_1222)" stroke-width="3" style="stroke-dasharray: 2383.45px; stroke-dashoffset: 1787.6px;"></path>
                    <path class="path-for-ftv-intro-home" d="M389.499 290.605C389.499 297.19 387.547 303.627 383.888 309.102C380.23 314.577 375.031 318.845 368.947 321.364C362.864 323.884 356.17 324.545 349.712 323.26C343.254 321.975 337.321 318.805 332.665 314.149C328.009 309.493 324.838 303.56 323.554 297.101C322.269 290.643 322.928 283.949 325.448 277.866C327.968 271.783 332.235 266.582 337.71 262.924C343.185 259.265 349.622 257.312 356.207 257.312C365.036 257.312 373.505 260.821 379.748 267.064C385.992 273.308 389.499 281.775 389.499 290.605Z" stroke="url(#paint1_linear_532_1222)" stroke-width="3" style="stroke-dasharray: 209.186px; stroke-dashoffset: 156.89px;"></path>
                </g>
                <defs>
                    <linearGradient id="paint0_linear_532_1222" x1="157.934" y1="0" x2="157.934" y2="662.09" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#c4c4c4"></stop>
                        <stop offset="1" stop-color="#c4c4c4" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_532_1222" x1="356.251" y1="255.812" x2="356.251" y2="325.399" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#c4c4c4"></stop>
                        <stop offset="1" stop-color="#c4c4c4" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
            <div class="row mx-0">
                <div class="col-12 col-md-6 column-1 px-0">
                    <div class="introduction-content-0">
                        <h2 class="bl-heading split-text spilit-word">Introduction</h2>
                        <p class="bl-paragraph">Fashion TV has had a monumental presence in fashion and broadcasting since 1997. We have widened our branches to multiple verticals where brand licensing via Fashion TV is an opportunity for aspiring companies to unlock their full potential of their intellectual property, driving growth, and fostering long-term success.</p>
                        <p class="bl-paragraph">At Fashion TV, we understand that in an ever-changing world, it has become significant to have an influential brand image for any company. We have brought a substantial medium for burgeoning startups seeking to expand their market presence or an established brand aiming to diversify their revenue streams.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 column-2 px-0">
                    <div class="swiper homeIntroductionSwiper">
                        <div class="swiper-wrapper d-flex align-self-center">
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-1.png" alt="" class="w-100">
                            </div>
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-2.png" alt="" class="w-100">
                            </div>
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-3.png" alt="" class="w-100">
                            </div>
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-4.png" alt="" class="w-100">
                            </div>
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-5.png" alt="" class="w-100">
                            </div>
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-6.png" alt="" class="w-100">
                            </div>
                            <div class="swiper-slide d-flex align-self-center res-swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/media/images/templates/home-intro-7.png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Introduction -->

        <!-- Deliverables -->
        <section class="common-deliverables">
            <div class="container-fluid px-0">
                <h2 class="bl-heading text-center split-text spilit-word">Deliverables</h2>
                <div class="common-deliverables-row">
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Social media marketing support</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Brand logo usage</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Market Analysis</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Launch Support</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Product Development Support</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Product Festive Revamps</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Trend Forecasting</h3>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="h-100">
                            <img src="<?= base_url(); ?>assets/media/images/templates/deliverables-example-img.png" alt="">
                        </div>
                        <div style="height: 64px;">
                            <h3 class="bl-paragraph bl--font-typ-1 fw-normal mt-2 text-center">Product Packaging</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Deliverables -->

        <!-- Section Breaker -->
        <section class="home-section-breaker--for-desktop">
            <div class="container-fluid px-0">
                <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>assets/media/images/templates/home-section-breaker-1.png" class="w-100">
                    <source src="<?= base_url(); ?>" type="video/mp4" class="w-100">
                </video>
            </div>
        </section>
        <section class="home-section-breaker--for-mobile">
            <div class="container-fluid px-0">
                <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>assets/media/images/templates/home-section-breaker-1.png" class="w-100">
                    <source src="<?= base_url(); ?>" type="video/mp4" class="w-100">
                </video>
            </div>
        </section>
        <!-- Section Breaker -->

        <!-- Our Licensing -->
        <section class="our-licensing tri-pg-cmn-swpr">
            <div class="container-fluid px-0">
                <div class="row mx-0">
                    <div class="col-12 col-md-3 column-1 px-0 pos-rel">
                        <h2 class="bl-heading split-text spilit-word">Our<br>Licensing</h2>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="col-12 col-md-9 column-2 px-0">
                        <div class="row row-1 mx-0 inner-row">
                            <!-- Content Same as Our Licensing: Desktop -->
                            <div class="col-12 column-inner-1">
                                <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables cmn-active-link" aria-current="page" href="javascript:void(0);" id="cmn-apparel">Apparel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-beverages">Beverages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-personal-care">Personal Care</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-accessories">Accessories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-white-goods">White Goods</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Content Same as Our Licensing: Phone -->
                            <div class="col-12 ms-5 sm-column-inner-1-hidden px-0">
                                <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables cmn-active-link" aria-current="page" href="javascript:void(0);" id="cmn-apparel">Apparel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-beverages">Beverages</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-12 ms-5 sm-column-inner-2-hidden px-0">
                                <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-personal-care">Personal Care</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-white-goods">White Goods</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 ms-5 sm-column-inner-3-hidden px-0">
                                <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-accessories">Accessories</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Content Same as Our Licensing: Tab -->
                            <div class="col-12 ms-5 column-inner-1-hidden">
                                <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables cmn-active-link" aria-current="page" href="javascript:void(0);" id="cmn-apparel">Apparel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-beverages">Beverages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-personal-care">Personal Care</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 ms-5 column-inner-2-hidden">
                                <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center me-auto mb-3 mb-md-4">
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-accessories">Accessories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link common-clickables" href="javascript:void(0);" id="cmn-white-goods">White Goods</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="swiper commonSwiper" id="swiper-for--cmn-apparel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-1" class="w-100">
                                    <h3>Men's Grooming</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-2.png" alt="example-image-2" class="w-100">
                                    <h3>Cosmetics/Makeup</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-3.png" alt="example-image-3" class="w-100">
                                    <h3>Haircare</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-4.png" alt="example-image-4" class="w-100">
                                    <h3>Nails</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper commonSwiper" id="swiper-for--cmn-beverages">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-4.png" alt="example-image-1" class="w-100">
                                    <h3>Cosmetics/Makeup</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-3.png" alt="example-image-1" class="w-100">
                                    <h3>Men's Grooming</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-2.png" alt="example-image-1" class="w-100">
                                    <h3>Nails</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-1" class="w-100">
                                    <h3>Haircare</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper commonSwiper" id="swiper-for--cmn-personal-care">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-1" class="w-100">
                                    <h3>Men's Grooming</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-2.png" alt="example-image-2" class="w-100">
                                    <h3>Cosmetics/Makeup</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-3.png" alt="example-image-3" class="w-100">
                                    <h3>Haircare</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-4.png" alt="example-image-4" class="w-100">
                                    <h3>Nails</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper commonSwiper" id="swiper-for--cmn-accessories">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-4" class="w-100">
                                    <h3>Cosmetics/Makeup</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-3" class="w-100">
                                    <h3>Men's Grooming</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-2.png" alt="example-image-1" class="w-100">
                                    <h3>Nails</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-1" class="w-100">
                                    <h3>Haircare</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper commonSwiper" id="swiper-for--cmn-white-goods">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-1" class="w-100">
                                    <h3>Men's Grooming</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-2.png" alt="example-image-2" class="w-100">
                                    <h3>Cosmetics/Makeup</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-3.png" alt="example-image-3" class="w-100">
                                    <h3>Haircare</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-4.png" alt="example-image-4" class="w-100">
                                    <h3>Nails</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Licensing -->

        <!-- Blogs -->
        <section class="common-blogs">
            <div class="container-fluid px-0">
                <div class="row mx-0">
                    <div class="col-12 px-0 d-flex align-items-center justify-content-between mb-md-0 mb-md-2 mb-lg-3 col-bm">
                        <h2 class="bl-heading blogs-heading split-text spilit-word">Our Blogs</h2>
                        <a href="<?= base_url(); ?>blogs" class="poppins-font text-decoration-underline view-more">View More</a>
                    </div>
                    <div class="col-md-4 px-0 px-md-2">
                        <div class="blog-card">
                            <img src="<?= base_url(); ?>assets/media/images/templates/home-blogs-example-img.png" alt="" class="w-100">
                            <div class="wrapper">
                                <p class="poppins-font">MAY 31th, 2023 by Name Surname</p>
                                <h3 class="poppins-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>

                                <a href="#" class="poppins-font px-0">Read More
                                    <span class="px-0 ms-3 ms-md-4">
                                        <svg width="351" height="6" viewBox="0 0 351 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M350.875 2.75L346.5 0.224092V5.27591L350.875 2.75ZM0.875 3.1875H346.938V2.3125H0.875V3.1875Z" fill="#6E3035" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-0 px-md-2">
                        <div class="blog-card">
                            <img src="<?= base_url(); ?>assets/media/images/templates/home-blogs-example-img.png" alt="" class="w-100">
                            <div class="wrapper">
                                <p class="poppins-font">MAY 31th, 2023 by Name Surname</p>
                                <h3 class="poppins-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                                <a href="#" class="poppins-font px-0">Read More
                                    <span class="px-0 ms-3 ms-md-4">
                                        <svg width="351" height="6" viewBox="0 0 351 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M350.875 2.75L346.5 0.224092V5.27591L350.875 2.75ZM0.875 3.1875H346.938V2.3125H0.875V3.1875Z" fill="#6E3035" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-0 px-md-2">
                        <div class="blog-card">
                            <img src="<?= base_url(); ?>assets/media/images/templates/home-blogs-example-img.png" alt="" class="w-100">
                            <div class="wrapper">
                                <p class="poppins-font">MAY 31th, 2023 by Name Surname</p>
                                <h3 class="poppins-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                                <a href="#" class="poppins-font px-0">Read More
                                    <span class="px-0 ms-3 ms-md-4">
                                        <svg width="351" height="6" viewBox="0 0 351 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M350.875 2.75L346.5 0.224092V5.27591L350.875 2.75ZM0.875 3.1875H346.938V2.3125H0.875V3.1875Z" fill="#6E3035" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blogs -->

        <!-- common cta 1 -->
        <section class="common-cta-1">
            <div class="container-fluid px-0">
                <div class="row mx-0">
                    <div class="col-12 col-md-6 col-lg-7 column-1">
                        <div class="cta-content">
                            <h3 class="split-text spilit-word">Empower Your Brand with</h3>
                            <h2 class="bl-heading split-text spilit-word">Licensing options today </h2>
                            <a href="<?= base_url(); ?>contact-us" class="cta-btn">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 column-2">
                        <img src="<?= base_url(); ?>assets/media/images/templates/home-cta-example-img.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </section>
        <!-- common cta 1 -->
    </main>

    <!-- custom script -->
    <script>
        console.log("Brand License by FashionTV");
        document.addEventListener("DOMContentLoaded", function() {
            const svgElement = document.getElementById("f-intro-home");
            const paths = svgElement.querySelectorAll(".path-for-ftv-intro-home");

            function animateLineDrawing(path) {
                const length = path.getTotalLength();
                path.style.strokeDasharray = length;
                path.style.strokeDashoffset = length;

                anime({
                    targets: path,
                    strokeDashoffset: 0,
                    easing: "easeInOutSine",
                    duration: 2000,
                    // delay: 500,
                    direction: "alternate",
                    loop: true,
                });
            }
            paths.forEach(animateLineDrawing);
        });
    </script>

    <!-- REFERENCE FOR Home Page Cover Section : https://codepen.io/ecemgo/pen/eYboyMe -->