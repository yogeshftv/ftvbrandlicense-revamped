<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<body class="for--our-story">

    <main class="our-story">
        <!-- Banner Video -->
        <section class="common-banner-video" style="background-color: #F0F0F0;">
            <video playsinline defaultmuted preload="auto" muted loop autoplay poster="<?= base_url(); ?>assets/media/images/templates/temp-banner-cover.png" class="w-100">
                <source src="<?= base_url(); ?>assets/media/videos/bl-2-our-story.mp4" type="video/mp4" class="w-100">
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
            <h2 class="text-center">About FashionTV</h2>
        </section>
        <!-- Introduction -->

        <!-- Our Philosophy -->
        <section class="common-philosophy">
            <div class="container-fluid px-0">
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

        <div class="bg-color pt-1 pb-5">
            <!-- statistics -->
            <section class="statistics">
                <h2 class="bl--font-typ-1 text-center">Our Statistics</h2>
                <div class="stats-container" id="statistics-section">
                    <div class="stats-card">
                        <h3 id="viewers" class="bl--font-typ-1">2B+</h3>
                        <p class="poppins-font fw-light">Viewers</p>
                    </div>
                    <div class="stats-card">
                        <h3 id="totalViews" class="bl--font-typ-1">65M</h3>
                        <p class="poppins-font fw-light">Views on<br> Youtube</p>
                    </div>
                    <div class="stats-card">
                        <h3 id="channels" class="bl--font-typ-1">12</h3>
                        <p class="poppins-font fw-light">Thematic Channels<br> Worldwide</p>
                    </div>
                    <div class="stats-card">
                        <h3 id="households" class="bl--font-typ-1">500M</h3>
                        <p class="poppins-font fw-light">Households</p>
                    </div>
                    <div class="stats-card">
                        <h3 id="countries" class="bl--font-typ-1">196</h3>
                        <p class="poppins-font fw-light">Countries</p>
                    </div>
                    <div class="stats-card">
                        <h3 id="viewsPerWeek" class="bl--font-typ-1">12M</h3>
                        <p class="poppins-font fw-light">Views Per Week</p>
                    </div>
                </div>
            </section>
            <!-- statistics -->

            <!-- Product Showcase -->
            <section class="common-product-showcase">
                <div class="swiper productShowcaseSwiper-2">
                    <div class="swiper-wrapper d-flex align-self-center">
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-1.png" alt="example-image-1">
                        </div>
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-2.png" alt="example-image-2">
                        </div>
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-3.png" alt="example-image-3">
                        </div>
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-4.png" alt="example-image-4">
                        </div>
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-5.png" alt="example-image-5">
                        </div>
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-6.png" alt="example-image-6">
                        </div>
                        <div class="swiper-slide align-self-center res-swiper-slide">
                            <img src="<?php echo base_url(); ?>assets/media/images/home/example-7.png" alt="example-image-7">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Showcase -->        
        </div>

        <!-- Our Boards -->
        <section class="our-boards">
            <h2 class="text-center bl--font-typ-1 heading">Our Boards</h2>
            <div class="row mx-0 row-1">
                <div class="col-12 col-md-6 px-0 column-1">
                    <img src="<?php echo base_url(); ?>assets/media/images/our-story/michel-adam.png" alt="michel-adam" class="w-100 h-100 michel-adam">
                </div>
                <div class="col-12 col-md-6 px-0 column-2">
                    <div class="boards-content">
                        <h2 class="d-none d-md-block bl--font-typ-1 sub-heading">michel adam</h2>
                        <p class="d-none d-md-block poppins-font designation">Chairman & Founder of FashionTV</p>
                        <div class="container-fluid px-0 d-block d-md-none">
                            <h2 class="bl--font-typ-1 sub-heading">michel adam</h2>
                            <p class="poppins-font designation">Chairman & Founder of FashionTV</p>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/media/images/our-story/michel-adam-2.png" alt="michel-adam">
                        <p class="d-none d-md-block mb-md-4 poppins-font">MICHEL ADAM LISOWSKI is the founder and chairman of FashionTV. He founded FashionTV to create a global fashion platform that focuses on fashion, luxury, and beauty. He is known as the 'FASHION MAESTRO' for his remarkable contribution to the vogue, luxury, and lifestyle industry around the globe. It has never been attempted before platform in India on a scale that is hard to match.</p>
                        <p class="d-none d-md-block poppins-font me-margin">He wishes to give young, talented, and ambitious aspirants from India an opportunity to understand the world of global chef-d'oeuvre fashion and bring them up to speed in this incredible vocation.</p>
                        <div class="container-fluid desc px-0 d-block d-md-none">
                            <p class="mb-md-4 poppins-font">MICHEL ADAM LISOWSKI is the founder and chairman of FashionTV. He founded FashionTV to create a global fashion platform that focuses on fashion, luxury, and beauty. He is known as the 'FASHION MAESTRO' for his remarkable contribution to the vogue, luxury, and lifestyle industry around the globe. It has never been attempted before platform in India on a scale that is hard to match.</p>
                            <p class="poppins-font">He wishes to give young, talented, and ambitious aspirants from India an opportunity to understand the world of global chef-d'oeuvre fashion and bring them up to speed in this incredible vocation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 row-2">
                <div class="col-12 col-md-6 px-0 column-1">
                    <div class="boards-content">
                        <h2 class="d-none d-md-block bl--font-typ-1 sub-heading">kashiff khan</h2>
                        <p class="d-none d-md-block poppins-font designation">Managing Director of FashionTV</p>
                        <div class="container-fluid px-0 d-block d-md-none">
                            <h2 class="bl--font-typ-1 sub-heading">kashiff khan</h2>
                            <p class="poppins-font designation">Managing Director of FashionTV</p>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/media/images/our-story/kashiff-khan-2.png" alt="michel-adam">
                        <p class="d-none d-md-block mb-md-4 poppins-font">KASHIFF KHAN, the Managing Director of the world's largest fashion and lifestyle media brand, 'FashionTV, Asia Pacific, is an iconic name in the world of Fashion and Brand Business Development in India.</p>
                        <p class="d-none d-md-block poppins-font me-margin">Moreover, Mr. Kashiff is also known as an author, writer, and start-up specialist for businesses all over the globe. Being well-connected is also important in this industry, according to the fashion icon Kashiff Khan. Kashiff Khan has gained media attention from all around the world and established a global presence while excelling in the Indian fashion industry.</p>
                        <div class="container-fluid px-0 desc d-block d-md-none">
                            <p class="mb-md-4 poppins-font">KASHIFF KHAN, the Managing Director of the world's largest fashion and lifestyle media brand, 'FashionTV, Asia Pacific, is an iconic name in the world of Fashion and Brand Business Development in India.</p>
                            <p class="poppins-font">Moreover, Mr. Kashiff is also known as an author, writer, and start-up specialist for businesses all over the globe. Being well-connected is also important in this industry, according to the fashion icon Kashiff Khan. Kashiff Khan has gained media attention from all around the world and established a global presence while excelling in the Indian fashion industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 px-0 column-2">
                    <img src="<?php echo base_url(); ?>assets/media/images/our-story/kashiff-khan.png" alt="kashiff-khan" class="w-100 h-100 kashiff-khan">
                </div>
            </div>
        </section>
        <!-- Our Boards -->

        <!-- CTA -->
        <section class="our-story-cta">
            <div class="row mx-0">
                <div class="col-12 col-md-4 column-1">
                    <img src="<?= base_url(); ?>assets/media/images/our-story/cta.png" alt="" class="w-100">
                </div>
                <div class="col-12 col-md-8 column-2">
                    <div class="cta-content">
                        <h3>Empower Your Brand with</h3>
                        <h2 class="bl--font-typ-1">Licensing options today </h2>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            <svg width="1920" height="228" viewBox="0 0 1920 228" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-276.284 101.459C-601.165 217.851 -767.462 149.956 -810 101.459V228L1920 228V101.459C1834.92 35.0608 1590.47 -66.099 1293.26 60.4483C996.046 186.996 620.398 163.952 469.725 136.611C326.606 110.641 48.5963 -14.9332 -276.284 101.459Z" fill="#131313"/>
            </svg>
        </section>
        <!-- CTA -->
    </main>
    
    <!-- custom script -->
    <script>

    </script>