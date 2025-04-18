<!-- Topbar -->
<div id="headerTop" class="header-topbar py-2 smallfnt text-center marquee-left">
    Diwali sale is open now. Buy early for the best discounts! Happy Diwali...!!!!
    &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
    &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
</div>
<!-- Header Section -->
<header class="header-section">
    <!-- Contact Bar -->
    <div class="contact-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <div class="contact-details">
                            <h2>Address</h2>
                            <p>123, Fireworks Ave, Sparkle City</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        <div class="contact-details">
                            <h2>Email</h2>
                            <p>info@demotraders.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        <div class="contact-details">
                            <h2>Phone</h2>
                            <p>+91 99999 99999</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.webp" alt="Demo Traders Logo" class="logo-small">
            </a>
            <button class="navbar-toggler border border-white" type="button" data-toggle="collapse"
                data-target="#navMenu">
                <i class="bi bi-list text-warning"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navMenu">
                <ul class="navbar-nav d-flex align-items-center justify-content-end">
                    <li class="nav-item px-2 mt-3 mt-md-0">
                        <a class="nav-link <?php if ($page == 'index')
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
                            echo 'active'; ?>" href="safety.php">Safety
                            Tips</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link <?php if ($page == 'contact')
                            echo 'active'; ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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