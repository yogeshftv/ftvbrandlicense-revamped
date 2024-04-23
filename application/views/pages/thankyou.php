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
        html, body {
            overflow: hidden;   
        }

        body {
            overflow: hidden;
            background-color: #000;
            display: flex;
            flex-direction: column;
        }

        main.thankyou {
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        main.thankyou::after {
            content: "";
            position: absolute;
            top: 3%;
            left: 5%;
            height: 100%;
            width: 100%;
            background-image: url('<?= base_url()?>assets/media/images/ftv-f--icon.png');
            background-size: 30%;
            background-repeat: no-repeat;
        }

        main.thankyou img {
            width: 6%;
            margin-bottom: 80px;
        }

        main.thankyou h1 {
            position: relative;
            z-index: 999;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 9.085rem;
            line-height: 10.9025rem;
        }

        main.thankyou div.align {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main.thankyou a {
            position: relative;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.25em;
            color: #E5B4A8;
            font-family: 'Poppins', sans-serif;
            font-size: 22px;
            line-height: 26.4px;
            font-weight: medium;
            text-decoration: none;
        }

        main.thankyou a span {
            font-size: 42px;
            letter-spacing: -0.9em;
        }

        main.thankyou p {
            color: #fff;
            font-size: 30px;
            line-height: 36px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
            margin-top: 14px;
            text-align: center;
            margin-bottom: 62px;
        }

        /* default styles */

        /* responsive styles */
        @media screen and (max-width: 280px) {
            main.thankyou p {
                font-size: 16px;
                line-height: 1.25;
            }

            main.thankyou a {
                font-size: 14px;
            }

            main.thankyou a span {
                font-size: 42px;
            }
        }

        @media screen and (max-width: 350px) {
            main.thankyou img {
                width: 30% !important;
            }
        }

        @media screen and (max-width: 400px) {
            main.thankyou img {
                width: 40%;
            }

            main.thankyou h1 {
                font-size: 2.75rem !important;
                line-height: 1.5;
            }

            main.thankyou p {
                width: 90%;
                font-size: 18px !important;
                line-height: 1.5;
            }
        }

        @media screen and (max-width: 767px) {
            main.thankyou img {
                width: 25%;
                margin-bottom: 60px;
            }

            main.thankyou h1 {
                font-size: 3.75rem;
                line-height: 1.5;
                margin-bottom: 0 !important;
            }

            main.thankyou p {
                width: 90%;
                font-size: 20px;
                line-height: 26px;
                margin-bottom: 40px;
            }

            main.thankyou a {
                gap: 2em;
                font-size: 16px;
            }

            main.thankyou a span {
                font-size: 36px;
            }

            main.thankyou::after {
                top: 30% !important;
                left: 2% !important;
                background-size: 30% !important; 
            }
        }

        @media screen and (min-width: 767px) and (max-width: 1024px) {
            main.thankyou img {
                width: 25%;
                margin-bottom: 60px;
            }

            main.thankyou h1 {
                font-size: 3.75rem;
                line-height: 1.5;
                margin-bottom: 0 !important;
            }

            main.thankyou p {
                width: 90%;
                font-size: 20px;
                line-height: 26px;
                margin-bottom: 40px;
            }

            main.thankyou a {
                gap: 2em;
                font-size: 16px;
            }

            main.thankyou a span {
                font-size: 36px;
            }

            main.thankyou::after {
                top: 30% !important;
                left: 2% !important;
                background-size: 30% !important; 
            }
        }

        @media screen and (min-width: 1024px) and (max-width: 1300px) {
            main.thankyou img {
                width: 15%;
                margin-bottom: 60px;
            }

            main.thankyou h1 {
                font-size: 5.75rem;
                line-height: 1.5;
                margin-bottom: 0 !important;
            }

            main.thankyou p {
                width: 90%;
                font-size: 20px;
                line-height: 26px;
                margin-bottom: 40px;
            }

            main.thankyou a {
                gap: 2em;
                font-size: 16px;
            }

            main.thankyou a span {
                font-size: 36px;
            }

            main.thankyou::after {
                top: 24% !important;
                left: 4% !important;
                background-size: 30% !important; 
            }
        }

        @media screen and (min-width: 1300px) and (max-width: 1500px) {
            main.thankyou::after {
                top: 10% !important;
                left: 2% !important; 
                background-size: 30% !important; 
            }
        }
        /* responsive styles */
    </style>
</head>

<body>
    <main class="thankyou">
        <img src="<?= base_url(); ?>/assets/media/icons/nav-logo.png" alt="checkmark">
        <h1>Thank You !</h1>
        <p>Thank you for getting in touch. Our business executives will reach out to you soon</p>
        <div class="align">
            <a href="<?= base_url(); ?>"><span> << </span>Go to home page</a>
        </div>
    </main>

    <script>
        console.log("Brand License by FashionTV");
    </script>
</body>
</html>