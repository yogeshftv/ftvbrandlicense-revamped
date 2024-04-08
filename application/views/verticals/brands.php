<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data = json_decode(file_get_contents(base_url() . "assets/js/brands.json"))->brands;
$url = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
foreach ($data as $brand) {
  foreach ($brand->sub as $vertical) {
    // echo base_url() . $vertical->slug . "<br>";
    if ($url == base_url() . $vertical->slug) { ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <?php $this->load->view("components/head"); ?>
        <?php foreach ($meta[0] as $key => $value) { ?>
          <meta name="<?php echo $key; ?>" value="<?php echo $value; ?>">
        <?php } ?>
        <title><?php echo $title; ?></title>
      </head>

      <body>
        <?php $this->load->view("components/nav"); ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/brands.min.css">
        <main style="margin-top: 100px;" class="mb-3 ftvhotels">
          <section class="hero">
            <svg class="f-branding d-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628.65 1066.64">
              <defs>
                <style>
                  @keyframes draw {
                    to {
                      stroke-dashoffset: 0;
                    }
                  }

                  .cls-1 {
                    opacity: 0.55;
                  }

                  .cls-2 {
                    fill: none;
                    stroke-miterlimit: 10;
                    stroke-width: 1.68px;
                    stroke-dasharray: 860;
                    stroke-dashoffset: 860;
                    animation: draw 2s infinite linear alternate-reverse;
                  }
                </style>
              </defs>
              <title>f-stroke</title>
              <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                  <g class="cls-1">
                    <path class="cls-2" d="M366,452.74H240.59v-75.4c0-107.35-12.16-312.49,100.94-342,17.07-4.37,41.56-4.37,58.63,4.37-6.82,37.66-25.76,85.56,23,107.09,77.42,33.62,121.71-64.49,41.57-123.48C430.6-2.4,363.8-2.95,322.23,6.34A255.57,255.57,0,0,0,248,37.48C116.78,120.27,120.17,321,120.17,455.32H1l-.18.16.74,33.33H118.87V874l2.23,156.27-119.5.54-.74,35H366v-21.31l.06-14.1H240.59V488.81H365.91Zm208.31-37.25A53.48,53.48,0,1,1,520.85,469,53.47,53.47,0,0,1,574.33,415.49Z"></path>
                  </g>
                </g>
              </g>
            </svg>
            <div class="container media-content side-wrap p-0">
              <div class="row m-0 justify-content-center">
                <div class="col-xl-7 col-lg-9">
                  <div class="wrap my-wrap">
                    <video class="d-sm-block d-none" autoplay="autoplay" muted="" preload="auto" loop="loop" poster="<?= base_url(); ?>assets/media/png/poster-9.png">
                      <source src="<?= base_url(); ?>assets/media/videos/Real-estate-6.mp4" type="video/mp4">
                    </video>
                    <video class=" d-sm-none d-block" autoplay="autoplay" muted="" preload="auto" loop="loop" poster="<?= base_url(); ?>assets/media/png/poster-9.png">
                      <source src="<?= base_url(); ?>assets/media/videos/Real-estate-mob-6.mp4" type="video/mp4">
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <div class="container text-content presents">
              <h1 class="text-center hero_title"><?= $vertical->name; ?></h1>
              <p><span></span></p>
            </div>
          </section>
          <div class="px-3 tabnav">
            <ul class="nav">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#introduction" aria-selected="true">Introduction</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#downloads" aria-selected="true">Downloads</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#philosophy" aria-selected="false">Philosophy</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#features" aria-selected="false">Features</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#pre-req" aria-selected="false">Pre-requisites</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#support" aria-selected="false">Brand Support</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="<?= base_url(); ?>enquire/<?= $vertical->slug_short ?>" aria-selected="false">Put an Enquiry</a>
              </li>
            </ul>
          </div>
          <div class="tabs-content">
            <section id="introduction">
              <fieldset class="full legend-top-center p-2">
                <legend class="float-none w-auto p-2">
                  Introduction
                </legend>
                <div class="row m-0 justify-content-center">
                  <div class="col-xxl-7 col-xl-9 col-lg-10 col-md-11">
                    <div class="text-content">
                      <div class="title">
                        <!-- <h2 class="section-title">Introduction</h2> -->
                      </div>
                      <div class="desc">
                        <?php foreach ($vertical->brand_details->introduction as $para) { ?>
                          <p>
                            <?= $para ?>
                          </p>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </section>
            <div class="marquee-animation text-stroked branding ltr">
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
            </div>
            <div class="marquee-animation text-stroked rtl">
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
            </div>
            <section id="downloads">
              <fieldset class="full legend-top-center p-2">
                <legend class="float-none w-auto p-2">
                  Downloads
                </legend>
                <div class="row m-0 justify-content-center">
                  <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11 px-3 pt-2">
                    <div class="row m-0 justify-content-between">
                      <div class="col-md-6 col-lg-3 col-12">
                        <div class="download cmn-dwnld">
                          <h5>Categories</h5>
                          <a class="btn-theme-01 download-btn" href="<?= $vertical->brand_details->downloads->categories->url; ?>" target="_blank">
                            Download<i class="bi bi-filetype-pdf mx-2"></i>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 col-12">
                        <div class="download cmn-dwnld">
                          <h5>Photo Book</h5>
                          <a class="btn-theme-01 download-btn" href="<?= $vertical->brand_details->downloads->lookbook->url; ?>" target="_blank">
                            Download<i class="bi bi-filetype-pdf mx-2"></i>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 col-12">
                        <div class="download cmn-dwnld">
                          <h5>Sales kit</h5>
                          <a class="btn-theme-01 download-btn" href="<?= $vertical->brand_details->downloads->saleskit->url; ?>" target="_blank">
                            Download<i class="bi bi-filetype-pdf mx-2"></i>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 col-12">
                        <div class="download cmn-dwnld">
                          <h5>Video Book</h5>
                          <a class="btn-theme-01 download-btn" href="<?= $vertical->brand_details->downloads->videobook->url; ?>" target="_blank">
                            Download<i class="bi bi-filetype-pdf mx-2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </section>
            <section id="philosophy" class="philosophy-section home-philosophy">
              <div class="row m-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-sm-11 col-12 px-2">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="text-content">
                        <h2 class="title" data-aos="fade-up">Philosophy</h2>
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="true">vision</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="false">mission</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="aim-tab" data-bs-toggle="tab" data-bs-target="#aim" type="button" role="tab" aria-controls="aim" aria-selected="false">aim</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                            <?php foreach ($vertical->brand_details->philosophy->vision as $para) { ?>
                              <p>
                                <?= $para ?>
                              </p>
                            <?php } ?>
                          </div>
                          <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                            <?php foreach ($vertical->brand_details->philosophy->mission as $para) { ?>
                              <p>
                                <?= $para ?>
                              </p>
                            <?php } ?>
                          </div>
                          <div class="tab-pane fade" id="aim" role="tabpanel" aria-labelledby="aim-tab">
                            <?php foreach ($vertical->brand_details->philosophy->aim as $para) { ?>
                              <p>
                                <?= $para ?>
                              </p>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="marquee-animation band rtl">
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
                <h6><?= $vertical->name; ?> </h6>
              </div>
            </section>
            <section class="features" id="features">
              <div class="row m-0 justify-content-center py-3">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-sm-11 col-12 px-2">
                  <fieldset class="full legend-bottom-center p-2">
                    <div class="content">
                      <div class="wrap standard-video" data-aos="zoom-out-up">
                        <video class="d-sm-block d-none" autoplay="autoplay" muted="" preload="auto" loop="loop" poster="<?= base_url(); ?>assets/media/png/poster-9.png">
                          <source src="<?= base_url(); ?>assets/media/videos/Real-estate-7.mp4" type="video/mp4">
                        </video>
                        <video class=" d-sm-none d-block" autoplay="autoplay" muted="" preload="auto" loop="loop" poster="<?= base_url(); ?>assets/media/png/poster-9.png">
                          <source src="<?= base_url(); ?>assets/media/videos/Real-estate-mob-7.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <legend class="float-none p-2" style="width: max-content;">
                      <h3>
                        <?= $vertical->name; ?>
                      </h3>
                      <h3>
                        FashionTV
                      </h3>
                      <h3>
                        Features
                      </h3>
                    </legend>
                  </fieldset>
                  <div class="features-wrapper">
                    <div class="row justify-content-center">
                      <div class="swiper-container mySwiper2">
                        <div class="swiper-wrapper">
                          <?php foreach ($vertical->brand_details->features as $feature) { ?>
                            <div class="swiper-slide">
                              <div class="feature" data-count="01">
                                <div class="wrap square-video" data-aos="zoom-out-up">
                                  <img src="<?= base_url(); ?>assets/media/png/<?= $feature->imageURL;?>" alt="">
                                </div>
                                <div class="title">
                                  <h4><?= $feature->title; ?></h4>
                                </div>
                                <div class="desc">
                                  <?php foreach ($feature->description as $para) { ?>
                                    <p>
                                      <?= $para ?>
                                    </p>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="pre">
              <div class="row m-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11">
                  <fieldset class="full legend-top-center p-2 fieldset-title">
                    <legend class="float-none w-auto p-2">Pre-requisites</legend>
                    <div class="content">
                      <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                          <div class="wrap square-video" data-aos="zoom-out-up">
                            <video autoplay="autoplay" muted="" preload="auto" loop="loop" poster="<?= base_url(); ?>assets/media/png/img-1.png">
                              <source src="" type="video/mp4">
                            </video>
                          </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                          <div class="text-content res-padding">
                            <ul class="list-unstyled">
                              <li data-aos="fade-up" class="aos-init">
                                <details open="">
                                  <summary>
                                    <h5 class="requisite-heading">Prime Location</h5>
                                  </summary>
                                  <p>
                                    <b><?= $vertical->name; ?></b> are located in the most upscale and prime locations as well as tropical locations where aesthetics matter, convenience and luxury being the emphasis of the origin of <b><?= $vertical->name; ?></b>, these are establishments that aim to please guests for days.
                                  </p>
                                </details>
                              </li>
                              <li data-aos="fade-up" data-aos-delay="50" class="aos-init">
                                <details>
                                  <summary>
                                    <h5 class="requisite-heading">Strong Financial Backings</h5>
                                  </summary>
                                  <p>
                                    All licensees must be able to show strong financial backing to ensure the success of the business
                                  </p>
                                </details>
                              </li>
                              <li data-aos="fade-up" data-aos-delay="100" class="aos-init">
                                <details>
                                  <summary>
                                    <h5 class="requisite-heading">Industry Attraction</h5>
                                  </summary>
                                  <p>
                                    All licensees must have attractions and likings towards the desired industry of convenience and luxury and a love for providing guests with the lifestyle they buy into.
                                  </p>
                                </details>
                              </li>
                              <li data-aos="fade-up" data-aos-delay="150" class="aos-init">
                                <h5 class="requisite-heading">Strong Desire to be more <i>Rich Famous &amp; Successful</i>!</h5>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </section>
            <div class="marquee-animation text-stroked branding ltr">
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
              <h6><?= $vertical->name; ?> </h6>
            </div>
            <div class="marquee-animation text-stroked rtl">
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
              <h6>FashionTV</h6>
            </div>
            <section id="support">
              <div class="row m-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-11">
                  <fieldset class="full legend-top-center p-2 fieldset-title">
                    <div class="content">
                      <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                          <div class="wrap square-video" data-aos="zoom-out-up">
                            <video autoplay="autoplay" muted="" preload="auto" loop="loop" poster="<?= base_url(); ?>assets/media/png/img-2.png">
                              <source src="../assets/media" type="video/mp4">
                            </video>
                          </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                          <div class="text-content res-padding">
                            <h2 class="brd_sup-heading">Brand Support</h2>

                            <p data-aos="fade-up" class="aos-init aos-animate">
                              FashionTV gives <em>360-degree support</em> to all our franchise partners. We help in all aspects ranging from location, architecture, and staff recruitment to PR launch plans, social media marketing, auditing, cross-marketing and more.
                              Strategic planning which is very important for the success of any business is worked on extensively by our team and franchise partners.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </section>
          </div>
        </main>

        <?php $this->load->view("components/footer"); ?>
        <script>
          var swiper = new Swiper('.mySwiper2', {
            slidesPerView: 3,
            spaceBetween: 20,
            autoHeight: true,
            // loop: true,
            // pagination: {
            //   el: ".swiper-pagination",
            //   dynamicBullets: true,
            // },
            autoplay: {
              delay: 3000,
              disableOnInteraction: false,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
                spaceBetween: 20,
              },
              640: {
                slidesPerView: 1,
                spaceBetween: 20,
              },
              768: {
                slidesPerView: 2,
                spaceBetween: 40,
              },
              1024: {
                slidesPerView: 3,
                spaceBetween: 50,
              },
            },
          });
        </script>
      </body>

      </html>
<?php
    }
  }
}
?>