<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Montserrat: Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <!-- Poppins: google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/typography.css" rel="stylesheet">
    <title>Thankyou page</title>
    <style>
        /* resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } 
        /* resets */

        /* default styles */
        @font-face {
            font-family: 'bl--font-typ-1';
            src: url('<?= base_url() ?>assets/fonts/Ogg-Regular.ttf') format('truetype');
        }

        html, body {
            overflow: hidden;   
        }

        body {
            display: flex;
            cursor: default;
            overflow: hidden;
            background-color: #000;
            flex-direction: column;
        }

        main.thankyou {
            height: 100vh;
            display: flex;
            position: relative;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        main.thankyou img {
            width: 100px;
        }

        main.thankyou h1 {
            color: #fff;
            z-index: 999;
        }

        main.thankyou div.align {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main.thankyou a {
            gap: 1.25em;
            display: flex;
            color: #ffffff;
            z-index: 99999;
            font-size: 20px;
            position: relative;
            line-height: 26.4px;
            font-weight: medium;
            align-items: center;
            text-decoration: none;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        main.thankyou a span {
            font-size: 42px;
            letter-spacing: -0.9em;
        }
        /* default styles */

        /* responsive styles */
        @media screen and (max-width: 280px) {
            main.thankyou a {
                font-size: 14px;
            }

            main.thankyou a span {
                font-size: 42px;
            }
        }

        @media screen and (max-width: 767px) {
            main.thankyou a {
                gap: 2em;
                font-size: 16px;
            }

            main.thankyou a span {
                font-size: 36px;
            }
        }

        @media screen and (min-width: 767px) and (max-width: 1024px) {
            main.thankyou a {
                gap: 2em;
                font-size: 16px;
            }

            main.thankyou a span {
                font-size: 36px;
            }
        }

        @media screen and (min-width: 1024px) and (max-width: 1300px) {
            main.thankyou a {
                gap: 2em;
                font-size: 16px;
            }

            main.thankyou a span {
                font-size: 36px;
            }
        }
        /* responsive styles */
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <main class="thankyou">
            <img class="mb-2 mb-md-4" src="<?= base_url(); ?>/assets/media/icons/nav-logo.png" alt="ftv-brand-license">
            <h1 class="bl-heading mb-2 mb-md-4">Thank You !</h1>
            <p class="bl-paragraph text-center text-white mb-4 mb-md-5">Thank you for getting in touch. <br>Our business executives will reach out to you soon</p>
            <a href="<?= base_url(); ?>"><span> << </span>Go to home page</a>
            <div class="align">
            </div>
        </main>             
    </div>
    
    <script>
        console.log("Brand License by FashionTV");
    </script>
</body>
</html>