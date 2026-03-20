<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">
<head>
 <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>
<link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<header class="header">
    <div class="container">
        <a href="<?php echo getHref('') ?>" class="logo">
            <img src="/assets/images/logo-dark.svg" alt="<?php echo getLang('header_logo_alt') ?>">
            <span><?php echo getLang('header_logo_text') ?></span>
        </a>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li><a href="<?php echo getHref('') ?>"
                       class="header-nav-link"><?php echo getLang('home') ?></a></li>
                <li><a href="<?php echo getHref('contact') ?>"
                       class="header-nav-link"><?php echo getLang('contact') ?></a></li>
                <li><a href="<?php echo getHref('about') ?>" class="header-nav-link"><?php echo getLang('about') ?></a>
                </li>
            </ul>
        </nav>
        <div class="lang-select-desktop lang-select" data-open="false">
            <?php generateLanguageSelector() ?>
        </div>
        <div class="burger" id="burger">
            <img src="/assets/images/burger.svg" alt="">
        </div>

        <div class="mobile-menu" id="mobile-menu">
            <div class="cross" id="cross-btn">
                <img src="/assets/images/cross.svg" alt="Cross">
            </div>
            <nav class="header-nav">
                <ul class="header-nav-list">
                    <li><a href="<?php echo getHref('') ?>"
                           class="header-nav-link"><?php echo getLang('home') ?></a></li>
                    <li><a href="<?php echo getHref('contact') ?>"
                           class="header-nav-link"><?php echo getLang('contact') ?></a></li>
                    <li><a href="<?php echo getHref('about') ?>"
                           class="header-nav-link"><?php echo getLang('about') ?></a></li>
                </ul>
            </nav>
            <div class="lang-select" id="lang-select">
                <?php generateLanguageSelector(true) ?>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="contact">
        <div class="container">
            <h2 class="title contact-title">
                <?php echo getLang('contact_title') ?>
            </h2>
            <p class="text contact-text">
                <?php echo getLang('contact_text') ?>
            </p>

            <div class="contact-form">
     

                <?php
                $country = $clientCountryCode;
                $phonecode = $clientCountryCode;
                $submit = getLang('contact_submit');
                $language = getLang('language_iso');
                $offer = getLang('brand_name_api');
                include rtrim($_SERVER['DOCUMENT_ROOT'], '/') . "/form_crypto_hyper/form_js_thanks.php"; ?>

                <p class="form-agreement">
                    <?php echo getLang('contact_form_agreement') ?>
                </p>

                <div id="formMessage" class="form-message">
                    <?php echo getLang('contact_form_success') ?>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <a href="<?php echo getHref('') ?>" class="logo">
                <img src="/assets/images/logo-white.svg" alt="<?php echo getLang('footer_logo_alt') ?>">
                <span><?php echo getLang('footer_logo_text') ?></span>
            </a>
            <nav class="footer-nav">
                <ul class="nav-list">

                    <li>
                        <a href="<?php echo getHref('contact') ?>"
                           class="nav-link"><?php echo getLang('contact') ?></a>
                    </li>
                    <li>
                        <a href="<?php echo getHref('about') ?>"
                           class="nav-link"><?php echo getLang('about') ?></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer-bottom">
            <div class="legal">
                <p class="legal-note"><?php echo getLang('footer_legal_note_1') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_2') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_3') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_4') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_5') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_6') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_7') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_8') ?></p>
                <p class="legal-note"><?php echo getLang('footer_legal_note_9') ?></p>
                <p class="legal-note legal-copy"><?php echo getLang('footer_legal_copy') ?></p>
            </div>
        </div>
    </div>
</footer>

<script defer src="/assets/js/script.js"></script>
</body>
</html>
