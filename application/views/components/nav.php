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

        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>assets/media/icons/nav-logo.png" alt="ftv-brand-license-logo">
                </a>
                <button class="btn hm-menu shadow-none p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            <img src="<?php echo base_url(); ?>assets/media/icons/nav-logo.png" alt="ftv-brand-license-logo">
                        </h5>
                        <button type="button" class="btn-close text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column justify-content-center">
                        
                        <div class="row mx-0">
                            <div class="col-12 col-md-4 column-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>brand-license">Brand License</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>our-story">Our Story</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>our-services">Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>faqs">Faqs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>contact-us">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>blogs">Blogs</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-8 column-2">
                                <ul class="navbar-nav flex-row justify-content-around me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Apparel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>brand-license">Beverages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>our-story">Personal Care</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>our-services">Accessories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url(); ?>faqs">White Goods</a>
                                    </li>
                                </ul>
                                <div class="swiper navbarSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-1.png" alt="example-image-1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-2.png" alt="example-image-2">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-3.png" alt="example-image-3">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url(); ?>assets/media/images/navbar/example-img-4.png" alt="example-image-4">
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