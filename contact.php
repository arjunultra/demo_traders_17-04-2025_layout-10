<?php $page = "contact"; ?>
<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://.com">
    <meta property="og:image" content="https://.com/images/android-icon-192x192.png">
    <meta name="keywords" content="">
    <meta property="og:description" name="description" content="">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="10 Days">
    <meta name="copyright" content="">
    <meta name="language" content="English">
    <meta name="distribution" content="Global">
    <meta name="web_author" content="srisoftwarez.com">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="icon" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/odometer-theme.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body itemscope itemtype="http://schema.org/WebPage">

    <?php include_once "header.php"; ?>
    <section class="contact-banner wow fadeInRight" wow-delay="5s">
        <img class="img-fluid w-100" src="images/contact-banner.webp" alt="demo traders about banner"
            title="Demo Traders">
    </section>
    <section class="container four-card-container mt-5 mb-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">
                            <i class="bi bi-geo-alt"></i> Location
                        </h2>
                        <p class="card-text flex-grow-1">Find us at: 123 Main Street, Sivakasi, Tamil Nadu, India</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">
                            <i class="bi bi-telephone"></i> Phone
                        </h2>
                        <p class="card-text flex-grow-1">Call us: +91 99999 99999</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </h2>
                        <p class="card-text flex-grow-1">Chat with us on WhatsApp: +91 88888 88888</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">
                            <i class="bi bi-envelope"></i> Mail
                        </h2>
                        <p class="card-text flex-grow-1">Email us at: demotraders@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62970.01160346889!2d77.75142297351574!3d9.454179599892328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cee43d812d0d%3A0x8ce12e9dcdaa2a2c!2sSivakasi%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1738684672622!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="contactlast bg-green text-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="helvetica smallfnt mb-0 py-2">
                        Copyright &copy; 2025, Demo Traders
                        <span class="">All rights reserved. Designed & Developed by Sri Softwarez</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed point w0">
        <a href="https://api.whatsapp.com/send?phone=91">
            <img src="images/whatsappicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point1 w0 d-none d-lg-block">
        <span class="time-of-year">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
            <div class="tooltip text-white carter text-center"> For More Details Call <br>
                <i class="fa fa-phone text-white"></i> +91
            </div>
        </span>
    </div>
    <div class="fixed point1 w0 d-lg-none">
        <a href="tel:+91">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point2">
        <a href="products.php">
            <img src="images/quickpurchase.png" class="priceicn2 float-right blink" alt="" title="">
        </a>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>

</html>