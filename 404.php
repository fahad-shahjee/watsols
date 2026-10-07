<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Page Not Found - Watsols';
    $pageDescription = 'The page you are looking for could not be found.';
    $noIndex = true;
    include __DIR__ . '/partials/head.php';
    ?>
</head>

<body>

    <!-- Section Header -->
    <header>
        <?php include 'partials/header.php'; ?>
    </header>


    <!-- Section Main Content-->
    <main>
        <!-- Section Banner -->
        <div class="section-404">
            <div class="banner-layout-404">
                <div class="layout-404">
                    <span class="text-404 title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">404</span>
                    <h3>Oops! Page Not Found</h3>
                    <p>We couldn't find the page you're looking for. It might have been removed, renamed, or never existed.</p>
                    <div>
                        <a href="./" class="btn btn-accent">
                            <div class="btn-title">
                                <span>Back to Home</span>
                            </div>
                            <div class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Section Footer -->
    <footer>
        <?php include 'partials/footer.php'; ?>
    </footer>

</body>

</html>