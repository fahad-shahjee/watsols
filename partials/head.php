<?php
// Shared <head>. Set $pageTitle and $pageDescription before including this file.
$siteUrl = 'https://watsols.com';
$pageTitle = isset($pageTitle) ? $pageTitle : 'Watsols - Where Vision Meets Execution';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Watsols drives digital growth through innovative technology solutions, creative strategies and expert IT, web development and digital marketing services.';
// Folder the site lives in: "" on watsols.com, "/watsols" on localhost/watsols.
// All links/assets are relative to <base>, so the same files work in both places.
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
$path = substr(strtok($_SERVER['REQUEST_URI'], '?'), strlen($basePath));
$canonical = $siteUrl . ($path === '/index' ? '/' : $path);
?>
    <meta charset="UTF-8">
    <base href="<?= htmlspecialchars($basePath) ?>/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<?php if (empty($noIndex)): ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<?php else: ?>
    <meta name="robots" content="noindex">
<?php endif; ?>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Watsols">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:image" content="<?= $siteUrl ?>/assets/image/logo.png">
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="assets/image/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="assets/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Font, Bootstrap, Font Awesome, Swiper, Animate.css - trimmed to only what the site uses -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.bundle.css?v=1">
    <link rel="stylesheet" href="assets/css/style.css?v=3">
