<head>
    <style>
        html, 
        body {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<main>
    <section class="subscribe-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="subscribe-content text-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/restricted.png" alt="">
                        <h2 class="my-4 text-center hvc-reg--ff ar-heading fw-medium">Action Restricted !</h2>
                        <p class="paragraph poppins--ff">This user does not exist with the website. To recieve further notifications please subscribe to our newsletter.</p>
                    </div>
                    <div class="common-btns text-center my-5">
                        <a href="<?= base_url(); ?>" title="Contact Now" class="poppins--ff wt-cp--btn py-3 px-4 text-decoration-none blog_read-btn">Back to Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>