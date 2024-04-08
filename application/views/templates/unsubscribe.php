<head>
    <style>
        html, 
        body {
            height: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color: #131313;
        }

        h2 {
            color: #fff;
            font-size: 48px;
            text-align: center;
        }

        p {
            color: #fff;
            font-size: 18px;
            text-align: center;
        }

        .common-btns {
            gap: 5rem;
            display: flex;
            margin-top: 48px;
            align-items: center;
            justify-content: center;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            color: #e5b4a8;
        }

        @media (min-width: 250px) and (max-width: 300px) {
            h2 {
                color: #fff;
                font-size: 24px;
                text-align: center;
            }

            p {
                color: #fff;
                font-size: 14px;
                text-align: center;
            }

            .common-btns {
                gap: 1rem !important;
                margin-top: 32px !important;
                flex-direction: column !important;
            }

            a {
                font-size: 14px;
                padding: 12px 24px; 
            }
        }

        @media (min-width: 300px) and (max-width: 500px) {
            h2 {
                color: #fff;
                font-size: 24px;
                text-align: center;
            }

            p {
                color: #fff;
                font-size: 14px;
                text-align: center;
            }

            .common-btns {
                gap: 2rem;
                margin-top: 28px;
            }

            a {
                font-size: 14px;
                padding: 12px 24px; 
            }
        }
    </style>
</head>

<main>
    <section class="subscribe-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="subscribe-content text-center">
                        <img src="<?php echo base_url(); ?>assets/media/images/unsubscribe-confirm.png" alt="">
                        <h2 class="my-4 text-center hvc-reg--ff heading fw-medium">WE ARE SAD TO SEE YOU GO!</h2>
                        <p class="paragraph poppins--ff text-center">You have been unsubscribed, and will no longer hear from us....</p>
                    </div>
                    <div class="common-btns text-center my-5">
                        <a href="<?= base_url(); ?>" title="Contact Now" class="poppins--ff wt-cp--btn py-3 px-4 text-decoration-none blog_read-btn" style="border: 1px solid #e5b4a8; border-radius: 10px;padding: 16px 32px;">Back to Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>