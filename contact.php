<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Watsols</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/image/favicon.ico">
</head>

<body>

    <!-- Section Header -->
    <header>
        <?php include 'partials/header.php'; ?>
    </header>

    <style>
    .terms-content {
    background: #000;
    }

    h2 {
    color: #fff;
    font-size: 30px;
    }
    </style>
    <main>
        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Contact Us</h2>
                        <nav class="breadcrumb">
                            <a href="./index.php" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Contact Us</p>
                        </nav>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

        <!-- Section Contact -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 g-5">
                    <div class="col col-xl-5">
                        <div class="contact-title-wrapper">
                            <div class="card contact-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Reach out to us</span>
                                </div>
                                <h2 class="title-heading">Get in Touch</h2>
                                <p>Reach out to us for tailored digital solutions that drive impactful results help your business grow.</p>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-phone-volume accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Phone Number</span>
                                        <h5>+92 310 8436573</h5>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-envelope accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Email Address</span>
                                        <h5>info@watsols.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-7">
                        <div id="success-message" class="alert success hidden">
                            <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                            <p>Thank you! Form submitted successfully.</p>
                        </div>

                        <div id="error-message" class="alert error hidden">
                            <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                            <p>Oops! Form submission failed. Please try again.</p>
                        </div>
                        <div class="form-layout-wrapper">
                            <div class="card form-layout">
                                <h3 class="title-heading">Let's Talk About Your Next Project</h3>
                                <form action="/backend/action/action" method="POST" class="form">
                                    <input type="hidden" name="type" value="contactForm">
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="text" name="full_name" id="first-name" placeholder="Full Name" required>
                                        </div>
                                        <div class="col">
                                            <input type="number" name="phone" id="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                                    <div class="form-button-container">
                                        <button type="submit" class="btn btn-accent">
                                            <span class="btn-title">
                                                <span>Send a Message</span>
                                            </span>
                                            <span class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Maps
        <div class="section pt-0">
            <div class="hero-container">
                <iframe loading="lazy" class="maps overflow-hidden"
                    src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                    title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom">
                </iframe>
            </div>
        </div> -->
    </main>

    <!-- Section Footer -->
    <footer>
        <?php include 'partials/footer.php'; ?>
    </footer>
</body>

</html>