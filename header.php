<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-xl">
        <div class="navbar-container">
            <div class="logo-container">
                <a class="navbar-brand" href="./index.php">
                    <img src="./image/marko-logo.png" class="site-logo img-fluid" alt="Logo">
                </a>
            </div>
            <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>

                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <!-- Services with 5 Submenus -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.php" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Services <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="service1.php">Logo Design</a></li>
                            <li><a class="dropdown-item" href="service2.php">Website Development</a></li>
                            <li><a class="dropdown-item" href="service3.php">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="service4.php">Business Branding</a></li>
                            <li><a class="dropdown-item" href="service5.php">App Development</a></li>
                            <li><a class="dropdown-item" href="service6.php">Software Development</a></li>
                        </ul>
                    </li>

                    <!-- Contact Us -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Right-side action buttons (unchanged) -->
            <div class="navbar-action-container">
                <div class="navbar-action-button">
                    <button id="themeSwitch" class="themeswitch" aria-label="Toggle Theme">
                        <i id="themeIcon" class="fas fa-moon"></i>
                    </button>
                </div>
                <div class="navbar-icon-wrapper">
                    <div class="icon-circle">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h6>+92 310 8436573</h6>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- End Navbar -->