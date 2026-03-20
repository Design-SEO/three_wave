<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<html lang="<?php echo getLang('locale_lang') ?>">
<head>
    <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>
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
    <section class="privacy-policy">
        <div class="container">
            <h2 class="title contact-title">
                <?php echo getLang('privacy_title') ?>
            </h2>

            <div class="privacy-policy-content">
                <p><?php echo getLang('privacy_updated') ?></p>

                <h3><?php echo getLang('privacy_1_title') ?></h3>
                <?php echo getLang('privacy_1_text') ?>

                <h3><?php echo getLang('privacy_2_title') ?></h3>

                <h4><?php echo getLang('privacy_2_1_title') ?></h4>
                <?php echo getLang('privacy_2_1_text') ?>

                <h4><?php echo getLang('privacy_2_2_title') ?></h4>
                <?php echo getLang('privacy_2_2_text') ?>

                <h4><?php echo getLang('privacy_2_3_title') ?></h4>
                <?php echo getLang('privacy_2_3_text') ?>

                <h4><?php echo getLang('privacy_2_4_title') ?></h4>
                <?php echo getLang('privacy_2_4_text') ?>

                <h3><?php echo getLang('privacy_3_title') ?></h3>
                <?php echo getLang('privacy_3_text') ?>

                <h3><?php echo getLang('privacy_4_title') ?></h3>
                <?php echo getLang('privacy_4_text') ?>

                <h3><?php echo getLang('privacy_5_title') ?></h3>
                <?php echo getLang('privacy_5_text') ?>

                <h3><?php echo getLang('privacy_6_title') ?></h3>
                <?php echo getLang('privacy_6_text') ?>

                <h3><?php echo getLang('privacy_7_title') ?></h3>
                <?php echo getLang('privacy_7_text') ?>

                <h3><?php echo getLang('privacy_8_title') ?></h3>
                <?php echo getLang('privacy_8_text') ?>

                <h3><?php echo getLang('privacy_9_title') ?></h3>
                <?php echo getLang('privacy_9_text') ?>

                <h3><?php echo getLang('privacy_10_title') ?></h3>
                <?php echo getLang('privacy_10_text') ?>

                <h3><?php echo getLang('privacy_11_title') ?></h3>
                <?php echo getLang('privacy_11_text') ?>

                <h3><?php echo getLang('privacy_12_title') ?></h3>
                <?php echo getLang('privacy_12_text') ?>
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