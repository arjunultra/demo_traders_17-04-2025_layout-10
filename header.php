<!-- Top announcement bar -->
<div id="headerTop" class="header-topbar py-2 smallfnt text-center marquee-left">
    Diwali sale is open now. Buy early for the best discounts! Happy Diwali...!!!!
    &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
    &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
</div>

<!-- Header Section -->
<header class="header-section fixed-top">
    <div class="container-fluid">
        <!-- Logo and Contact Row -->
        <div class="row align-items-center logo-contact">
            <!-- Logo Area -->
            <div class="col-12 col-md-4 col-lg-3 header-logo-area">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.webp" alt="Demo Traders Logo" class="logo-large">
                </a>
            </div>

            <!-- Contact Details Area -->
            <div class="col-12 col-md-8 col-lg-9">
                <div class="row contact-row align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Empty or can be used for address later -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="contact-item">
                            <div class="icon-container">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-details">
                                <h2>Email</h2>
                                <p>info@demotraders.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="contact-item contact-phone">
                            <div class="icon-container">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-details">
                                <h2>Phone</h2>
                                <p>+91 99999 99999</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Row -->
        <div class="row nav-row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler border border-white mx-auto" type="button" data-toggle="collapse"
                        data-target="#navMenu">
                        <i class="bi bi-list text-warning"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navMenu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'home')
                                    echo 'active'; ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'about')
                                    echo 'active'; ?>" href="about.php">About</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'products')
                                    echo 'active'; ?>" href="products.php">Products</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'safety')
                                    echo 'active'; ?>" href="safety.php">Safety Tips</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link <?php if ($page == 'contact')
                                    echo 'active'; ?>" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Marquee Script -->
<script src="js/jquery.min.js"></script>
<script src="js/marquee.js"></script>
<script>
    $('.marquee-left').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>