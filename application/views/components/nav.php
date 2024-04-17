<?php
$path = $_SERVER['REQUEST_URI'];
$path = explode('/', $path);
$path = end($path);
// echo $path;die;
?>

<body>
    <a href="https://api.whatsapp.com/send?phone=918655435686&amp;text=I%20am%20Interested%20in%20FTV%20Brand%20License." target="_blank" class="btn-whatsapp-pulse">
        <i class="fab fa-whatsapp"></i>
    </a>
    <header>
        <!-- Code Navbar below -->

        <nav class="navbar absolute-black--element-bg-clr">
            <div class="container-fluid">
                <button class="btn hm-menu shadow-none p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2H34" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M2 12H26" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M2 22H34" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>    
                    <span>Menu</span>
                </button>
                <a class="navbar-brand t-loader" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>assets/media/icons/nav-logo.png" alt="ftv-brand-license-logo">
                </a>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title ms-5" id="offcanvasExampleLabel">
                            <img src="<?php echo base_url(); ?>assets/media/icons/nav-logo.png" alt="ftv-brand-license-logo">
                        </h5>
                        <button type="button" class="btn-close text-reset shadow-none me-4" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column justify-content-center">
                        
                        <div class="row mx-0">
                            <div class="col-12 col-md-4 column-1 px-0">
                                <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link active t-loader navigation" aria-current="page" href="<?php echo base_url(); ?>" id="home">Home</a>
                                    </li>
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link t-loader navigation" href="<?php echo base_url(); ?>brand-license" id="brand-license">Brand License</a>
                                    </li>
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link t-loader navigation" href="<?php echo base_url(); ?>our-story" id="our-story">Our Story</a>
                                    </li>
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link t-loader navigation" href="<?php echo base_url(); ?>our-services" id="our-services">Our Services</a>
                                    </li>
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link t-loader navigation" href="<?php echo base_url(); ?>faqs" id="faqs">Faqs</a>
                                    </li>
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link t-loader navigation" href="<?php echo base_url(); ?>contact-us" id="contact-us">Contact Us</a>
                                    </li>
                                    <li class="nav-item mb-2 mb-md-3">
                                        <a class="nav-link t-loader navigation" href="<?php echo base_url(); ?>blogs" id="blogs">Blogs</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-8 column-2 px-0">
                                <div class="row mx-0" id="pos-here">
                                    <div class="col-9 column-inner-1">
                                        <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center me-auto mb-3 mb-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link clickables" aria-current="page" href="#" id="apparel">Apparel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link clickables" href="#" id="beverages">Beverages</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link clickables" href="#" id="personal-care">Personal Care</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-9 column-inner-2">
                                        <ul class="navbar-nav gap-3 gap-md-5 flex-row align-items-center me-auto mb-3 mb-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link clickables" href="#" id="accessories">Accessories</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link clickables" href="#" id="white-goods">White Goods</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper navbarSwiper" id="swiper-for--apparel">
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
                                <div class="swiper navbarSwiper" id="swiper-for--beverages">
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
                                <div class="swiper navbarSwiper" id="swiper-for--personal-care">
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
                                <div class="swiper navbarSwiper" id="swiper-for--accessories">
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
                                <div class="swiper navbarSwiper" id="swiper-for--white-goods">
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
                </div>
            </div>
        </nav>
        
    </header>

    <div id="loader-wrapper">
        <div id="loader" class="loader"></div>
        <div id="backdrop"></div>
    </div>
