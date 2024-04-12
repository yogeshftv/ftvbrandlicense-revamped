<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<body class="for--our-story">

    <main class="our-story">
        <!-- Banner Video -->
        <section class="common-banner-video">
            <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>assets/media/images/templates/temp-banner-cover.png" class="w-100">
                <source src="<?= base_url(); ?>" type="video/mp4" class="w-100">
            </video>
        </section>

        <section class="common-banner-video-for-mobile">
            <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>" class="w-100">
                <source src="<?= base_url(); ?>" type="video/mp4" class="w-100">
            </video>
        </section>
        <!-- Banner Video -->

        <!-- Introduction -->
        <section class="common-introduction-1">
            <div class="row mx-0">
                <div class="col-md-3 d-none d-md-block column-1">
                    <img src="<?php echo base_url(); ?>assets/media/images/home/example-8.png" alt="example-image-8" class="img-1">
                </div>
                <div class="col-12 col-md-9 column-2">
                    <div class="introduction-content">
                        <div class="row mx-0">
                            <div class="col-md-6 column-1">
                                <h2 class="text-center d-none d-md-block">About FashionTV</h2>
                                <div class="container-fluid d-block d-md-none">
                                    <h2 class="text-start">About FashionTV</h2>
                                </div>
                            </div>
                            <div class="col-6 d-none d-md-block column-2"></div>
                            <div class="col-4 d-md-block column-3"></div>
                            <div class="col-md-8 column-4">
                                <div class="container-fluid d-block d-md-none">
                                    <p>Welcome to a whole different realm where fashion, glamour, and an opulent way of life embellish the world. FashionTV has nurtured fashion into a global phenomenon. A space that inspires and adorns fashion enthusiasts with the power of media. Moreover, to further the brand's purpose, FashionTV is now collaborating with aspiring entrepreneurs to launch multiple businesses in various fields by franchising, licensing, events, media, concepts and city partnership.</p>
                                </div>
                                <p class="d-none d-md-block">Welcome to a whole different realm where fashion, glamour, and an opulent way of life embellish the world. FashionTV has nurtured fashion into a global phenomenon. A space that inspires and adorns fashion enthusiasts with the power of media. Moreover, to further the brand's purpose, FashionTV is now collaborating with aspiring entrepreneurs to launch multiple businesses in various fields by franchising, licensing, events, media, concepts and city partnership.</p>
                            </div>
                            <div class="col-3 column-5 d-none d-md-block"></div>
                            <div class="col-md-9 column-6">
                                <img src="<?php echo base_url(); ?>assets/media/images/home/example-9.png" alt="example image 9">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Introduction -->

        <!-- Our Philosophy -->
        <section class="common-philosophy">
            <div class="container-fluid">
                <h2 class="text-center">Our Philosophy</h2>
                <div class="row row-1 c-row">
                    <div class="col-12 col-md-3 column-1 d-flex align-items-center">
                        <h3>Vision</h3>
                    </div>
                    <div class="col-12 col-md-9 column-2 d-flex align-items-center">
                        <p>To seek ventures that auxiliary our love for fashion, and make his mark in India, one of the world's second-largest consumer markets.</p>
                    </div>
                </div>
                <div class="row row-2 c-row">
                    <div class="col-12 col-md-3 column-1 d-flex align-items-center">
                        <h3>Mission</h3>
                    </div>
                    <div class="col-12 col-md-9 column-2 d-flex align-items-center">
                        <p>We look forward to making FashionTV a household name by providing the masses with nothing but the best in association with our partners.</p>    
                    </div>
                </div>
                <div class="row row-3 c-row">
                    <div class="col-12 col-md-3 column-1 d-flex align-items-center">
                        <h3>Aim</h3>    
                    </div>
                    <div class="col-12 col-md-9 column-2 d-flex align-items-center">
                        <p>We aim to become the leading brand in the Indian market not only in the fashion industry but in numerous business sectors recognised for its synergy, brilliance and excellence.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Philosophy -->

        <!-- statistics -->
        <section class="statistics">
            <h2 class="bl-font heading text-center light-salmon spilit-word">Statistics</h2>
            <div class="stats-container" id="statistics-section">
                <div class="stats-card">
                    <h3 id="viewers" class="bl-font heading light-salmon">2B+</h3>
                    <p class="paragraph poppins-font fw-light">Viewers</p>
                </div>
                <div class="stats-card">
                    <h3 id="totalViews" class="bl-font heading light-salmon">65M</h3>
                    <p class="paragraph poppins-font fw-light">Views on<br> Youtube</p>
                </div>
                <div class="stats-card">
                    <h3 id="channels" class="bl-font heading light-salmon">12</h3>
                    <p class="paragraph poppins-font fw-light">Thematic Channels<br> Worldwide</p>
                </div>
                <div class="stats-card">
                    <h3 id="households" class="bl-font heading light-salmon">500M</h3>
                    <p class="paragraph poppins-font fw-light">Households</p>
                </div>
                <div class="stats-card">
                    <h3 id="countries" class="bl-font heading light-salmon">196</h3>
                    <p class="paragraph poppins-font fw-light">Countries</p>
                </div>
                <div class="stats-card">
                    <h3 id="viewsPerWeek" class="bl-font heading light-salmon">12M</h3>
                    <p class=" paragraph poppins-font fw-light">Views Per Week</p>
                </div>
            </div>
        </section>
        <!-- statistics -->

        <!-- Product Showcase -->
        <section class="common-product-showcase">
            <div class="swiper productShowcaseSwiper-2">
                <div class="swiper-wrapper d-flex align-self-center">
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-1.png" alt="example-image-1">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-2.png" alt="example-image-2">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-3.png" alt="example-image-3">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-4.png" alt="example-image-4">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-5.png" alt="example-image-5">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-6.png" alt="example-image-6">
                    </div>
                    <div class="swiper-slide align-self-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/home/example-7.png" alt="example-image-7">
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Showcase -->        
        
        <!-- Our Boards -->
        <section class="our-boards">
            <h2 class="text-center">Our Boards</h2>
            <div class="row mx-0 row-1">
                <div class="col-12 col-md-6 px-0 column-1">
                    <img src="<?php echo base_url(); ?>assets/media/images/our-story/michel-adam.png" alt="michel-adam" class="w-100 h-100">
                </div>
                <div class="col-12 col-md-6 px-0 column-2">
                    <div class="boards-content">
                        <h2 class="d-none d-md-block">michel adam</h2>
                        <p class="d-none d-md-block">Chairman & Founder of FashionTV</p>
                        <div class="container-fluid d-block d-md-none">
                            <h2>michel adam</h2>
                            <p>Chairman & Founder of FashionTV</p>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/media/images/our-story/michel-adam-2.png" alt="michel-adam">
                        <p class="d-none d-md-block">MICHEL ADAM LISOWSKI is the founder and chairman of FashionTV. He founded FashionTV to create a global fashion platform that focuses on fashion, luxury, and beauty. He is known as the 'FASHION MAESTRO' for his remarkable contribution to the vogue, luxury, and lifestyle industry around the globe. It has never been attempted before platform in India on a scale that is hard to match.</p>
                        <p class="d-none d-md-block">He wishes to give young, talented, and ambitious aspirants from India an opportunity to understand the world of global chef-d'oeuvre fashion and bring them up to speed in this incredible vocation.</p>
                        <div class="container-fluid d-block d-md-none">
                            <p>MICHEL ADAM LISOWSKI is the founder and chairman of FashionTV. He founded FashionTV to create a global fashion platform that focuses on fashion, luxury, and beauty. He is known as the 'FASHION MAESTRO' for his remarkable contribution to the vogue, luxury, and lifestyle industry around the globe. It has never been attempted before platform in India on a scale that is hard to match.</p>
                            <p>He wishes to give young, talented, and ambitious aspirants from India an opportunity to understand the world of global chef-d'oeuvre fashion and bring them up to speed in this incredible vocation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 row-2">
                <div class="col-12 col-md-6 px-0 column-1">
                    <div class="boards-content">
                        <h2 class="d-none d-md-block">kashiff khan</h2>
                        <p class="d-none d-md-block">Managing Director of FashionTV</p>
                        <div class="container-fluid d-block d-md-none">
                            <h2>kashiff khan</h2>
                            <p>Managing Director of FashionTV</p>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/media/images/our-story/kashiff-khan-2.png" alt="michel-adam">
                        <p class="d-none d-md-block">KASHIFF KHAN, the Managing Director of the world's largest fashion and lifestyle media brand, 'FashionTV, Asia Pacific, is an iconic name in the world of Fashion and Brand Business Development in India.</p>
                        <p class="d-none d-md-block">Moreover, Mr. Kashiff is also known as an author, writer, and start-up specialist for businesses all over the globe. Being well-connected is also important in this industry, according to the fashion icon Kashiff Khan. Kashiff Khan has gained media attention from all around the world and established a global presence while excelling in the Indian fashion industry.</p>
                        <div class="container-fluid d-block d-md-none">
                            <p>KASHIFF KHAN, the Managing Director of the world's largest fashion and lifestyle media brand, 'FashionTV, Asia Pacific, is an iconic name in the world of Fashion and Brand Business Development in India.</p>
                            <p>Moreover, Mr. Kashiff is also known as an author, writer, and start-up specialist for businesses all over the globe. Being well-connected is also important in this industry, according to the fashion icon Kashiff Khan. Kashiff Khan has gained media attention from all around the world and established a global presence while excelling in the Indian fashion industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 px-0 column-2">
                    <img src="<?php echo base_url(); ?>assets/media/images/our-story/kashiff-khan.png" alt="kashiff-khan" class="w-100 h-100">
                </div>
            </div>
        </section>
        <!-- Our Boards -->
    </main>
    
    <!-- custom script -->
    <script>

    </script>