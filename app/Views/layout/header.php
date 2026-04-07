<!DOCTYPE html>
<html lang="<?= service('language')->getLocale(); ?>">

<head>
    <meta charset=utf-8>
    <meta name="robots" content="index,follow">
    <meta name="robots" content="all">
    <meta name="robots" content="noodp,noydir" />
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8" />

    <title><?= esc($title) ?></title>
    <meta name="description" content="<?= esc($description) ?>">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?= esc($title) ?>" />
    <meta name="twitter:description" content="<?= esc($description) ?>" />

    <meta property="og:site_name" content="DarkHourChat" />
    <meta property="og:title" content="<?= esc($title) ?>">
    <meta property="og:description" content="<?= esc($description) ?>">
    <meta property="og:image" content="<?= base_url('assets/images/favicon/apple-touch-icon.png'); ?>">
    <meta property="og:image:secure_url" content="<?= base_url('assets/images/favicon/apple-touch-icon.png'); ?>">
    <meta property="og:image:width" content="192">
    <meta property="og:image:height" content="192">
    <meta property="og:image:type" content="image/png">
    <meta property="og:type" content="website" />
    <meta property="og:logo" content="<?= base_url('assets/images/favicon/apple-touch-icon.png'); ?>">
    <meta property="og:url" content="<?= (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

    <?php $canonicalUrl = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    <link rel="canonical" href="<?= $canonicalUrl; ?>">

    <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon/favicon-96x96.png'); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url('assets/images/favicon/favicon.svg'); ?>" />
    <link rel="shortcut icon" href="<?= base_url('images/favicon/favicon.ico'); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/favicon/apple-touch-icon.png'); ?>" />
    <meta name="apple-mobile-web-app-title" content="DarkHourChat" />
    <link rel="manifest" href="<?= base_url('assets/images/favicon/site.webmanifest'); ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app.css'); ?>">

</head>

<body>