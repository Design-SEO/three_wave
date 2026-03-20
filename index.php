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
                    <li>
                        <a href="<?php echo getHref('contact') ?>"
                           class="header-nav-link"><?php echo getLang('contact') ?></a>
                    </li>
                    <li>
                        <a href="<?php echo getHref('about') ?>"
                           class="header-nav-link"><?php echo getLang('about') ?></a>
                    </li>
                </ul>
            </nav>
            <div class="lang-select" id="lang-select">
                <?php generateLanguageSelector(true) ?>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-form" id="registerForm">
                    <h2 class="hero-form-title"><?php echo getLang('hero_form_title') ?></h2>
                    <?php
                        $country = $clientCountryCode;
                        $phonecode = $clientCountryCode;
                        $submit = '';
                        $language = getLang('language_iso');
                        $offer = getLang('brand_name_api');
                        include "./form_crypto_hyper/form_js_thanks.php";
                    ?>
                    <p class="form-agreement">
                        <?php echo getLang('hero_form_notice') ?>
                    </p>
                </div>
                <div class="hero-info">
                    <h2 class="title hero-title"><?php echo getLang('hero_title') ?></h2>
                    <p class="text"><?php echo getLang('hero_subtitle') ?></p>
                </div>
            </div>
            <div class="hero-stats">
                <ul class="stats-list">
                    <li class="stats-item logo">
                        <div class="logo nerdwallet" aria-label="Nerdwallet">
                            <img src="/assets/images/nerdwallet.svg" alt="">
                        </div>
                        <div class="caption">
                            <p class="note"><?php echo getLang('hero_stat_nerdwallet') ?></p>
                        </div>
                    </li>
                    <li class="stats-item logo">
                        <div class="logo investopedia" aria-label="Investopedia">
                            <img src="/assets/images/investopedia.svg" alt="">
                        </div>
                        <p class="note"><?php echo getLang('hero_stat_investopedia') ?></p>
                    </li>
                    <li class="stats-item">
                        <p class="value">450K+</p>
                        <p class="label"><?php echo getLang('hero_stat_clients') ?></p>
                    </li>
                    <li class="stats-item">
                        <p class="value">$26B+</p>
                        <p class="label"><?php echo getLang('hero_stat_funds') ?></p>
                    </li>
                    <li class="stats-item rating">
                        <div class="rating-wrap">
                            <span class="value">4.9</span>
                            <svg class="star" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2l3.09 6.26 6.91 1-5 4.87L18.18 22 12 18.56 5.82 22 7 14.13l-5-4.87 6.91-1L12 2z"/>
                            </svg>
                        </div>
                        <p class="label"><?php echo getLang('hero_stat_appstore') ?></p>
                    </li>
                    <li class="stats-item rating">
                        <div class="rating-wrap">
                            <span class="value">4.5</span>
                            <svg class="star" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2l3.09 6.26 6.91 1-5 4.87L18.18 22 12 18.56 5.82 22 7 14.13l-5-4.87 6.91-1L12 2z"/>
                            </svg>
                        </div>
                        <p class="label"><?php echo getLang('hero_stat_playstore') ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="investition">
        <div class="container">
            <div class="investition-info">
                <h2 class="title investition-title">
                    <?php echo getLang('investition_title') ?>
                </h2>
                <p class="text investition-text">
                    <?php echo getLang('investition_text') ?>
                </p>
                <div class="btns">
                    <a href="#registerForm" class="btn btn-primary">
                        <?php echo getLang('investition_btn_start') ?>
                    </a>
                    <a href="#registerForm" class="btn btn-transparent">
                        <?php echo getLang('investition_btn_more') ?>
                    </a>
                </div>
            </div>
            <div class="investition-image">
                <div class="phone">
                    <img src="/assets/images/phone.webp" alt="">
                </div>
                <div class="notifications">
                    <div class="notification">
                        <div class="notification-header">
                            <div class="notification-app">
                                <img src="/assets/images/logo-icon-mini.svg" alt="Logo" class="app-icon">
                                <span class="app-name"><?php echo getLang('investition_notification_app') ?></span>
                            </div>
                            <span class="notification-time"><?php echo getLang('investition_notification_time') ?></span>
                        </div>
                        <div class="notification-body">
                            <p class="notification-text">
                                <?php echo getLang('investition_notification_1') ?>
                            </p>
                        </div>
                    </div>
                    <div class="notification">
                        <div class="notification-header">
                            <div class="notification-app">
                                <img src="/assets/images/logo-icon-mini.svg" alt="Logo" class="app-icon">
                                <span class="app-name"><?php echo getLang('investition_notification_app') ?></span>
                            </div>
                            <span class="notification-time"><?php echo getLang('investition_notification_time') ?></span>
                        </div>
                        <div class="notification-body">
                            <p class="notification-text">
                                <?php echo getLang('investition_notification_2') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cash">
        <div class="container">
            <div class="cash-image">
                <div class="phone">
                    <img src="/assets/images/phone2.webp" alt="<?php echo getLang('cash_img_phone_alt') ?>">
                </div>
                <div class="card">
                    <img src="/assets/images/card.webp" alt="<?php echo getLang('cash_img_card_alt') ?>">
                </div>
            </div>
            <div class="cash-info">
                <h2 class="title cash-title">
                    <?php echo getLang('cash_title') ?>
                </h2>
                <p class="text cash-text">
                    <?php echo getLang('cash_text') ?>
                </p>
                <div class="btns">
                    <a href="#registerForm" class="btn btn-primary">
                        <?php echo getLang('cash_btn_start') ?>
                    </a>
                    <a href="#registerForm" class="btn btn-transparent">
                        <?php echo getLang('cash_btn_more') ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="saving">
        <div class="container">
            <div class="saving-info">
                <h2 class="title saving-title">
                    <?php echo getLang('saving_title') ?>
                </h2>
                <p class="text saving-text">
                    <?php echo getLang('saving_text') ?>
                </p>
            </div>
            <div class="saving-image">
                <img src="/assets/images/saving-image.webp" alt="<?php echo getLang('saving_img_alt') ?>">
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <div class="testimonials">
                <article class="testimonial-card">
                    <div class="testimonial-head">
                        <p class="testimonial-title"><?php echo getLang('testimonial_title') ?></p>
                        <blockquote class="testimonial-quote">
                            <?php echo getLang('testimonial_1_quote') ?>
                        </blockquote>
                    </div>
                    <cite class="testimonial-author"><?php echo getLang('testimonial_1_author') ?></cite>
                </article>
                <article class="testimonial-card">
                    <div class="testimonial-head">
                        <p class="testimonial-title"><?php echo getLang('testimonial_title') ?></p>
                        <blockquote class="testimonial-quote">
                            <?php echo getLang('testimonial_2_quote') ?>
                        </blockquote>
                    </div>
                    <cite class="testimonial-author"><?php echo getLang('testimonial_2_author') ?></cite>
                </article>
                <article class="testimonial-card">
                    <div class="testimonial-head">
                        <p class="testimonial-title"><?php echo getLang('testimonial_title') ?></p>
                        <blockquote class="testimonial-quote">
                            <?php echo getLang('testimonial_3_quote') ?>
                        </blockquote>
                    </div>
                    <cite class="testimonial-author"><?php echo getLang('testimonial_3_author') ?></cite>
                </article>
            </div>
        </div>
    </section>
    <section class="trust">
        <div class="container">
            <div class="trust-illustration">
                <img src="/assets/images/illustration-window.webp" alt="<?php echo getLang('trust_img_alt') ?>">
            </div>
            <div class="trust-content">
                <h2 class="title trust-title">
                    <?php echo getLang('trust_title') ?>
                </h2>
                <a href="#registerForm" class="btn btn-primary">
                    <?php echo getLang('trust_btn') ?>
                </a>
            </div>
            <div class="trust-logos">
                <p class="trust-subtitle"><?php echo getLang('trust_subtitle') ?></p>
                <ul class="logos-list">
                    <li><img src="/assets/images/wsj.svg" alt="<?php echo getLang('trust_logo_wsj_alt') ?>"></li>
                    <li><img src="/assets/images/bloomberg.svg" alt="<?php echo getLang('trust_logo_bloomberg_alt') ?>"></li>
                    <li><img src="/assets/images/nyt.svg" alt="<?php echo getLang('trust_logo_nyt_alt') ?>"></li>
                    <li><img src="/assets/images/reuters.svg" alt="<?php echo getLang('trust_logo_reuters_alt') ?>"></li>
                    <li><img src="/assets/images/cnbc.svg" alt="<?php echo getLang('trust_logo_cnbc_alt') ?>"></li>
                </ul>
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
