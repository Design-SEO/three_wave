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
                        <li><a href="<?php echo getHref('') ?>" class="header-nav-link"><?php echo getLang('home') ?></a></li>
                        <li><a href="<?php echo getHref('contact') ?>" class="header-nav-link"><?php echo getLang('contact') ?></a></li>
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
                            <li><a href="<?php echo getHref('') ?>" class="header-nav-link"><?php echo getLang('home') ?></a></li>
                            <li><a href="<?php echo getHref('contact') ?>" class="header-nav-link"><?php echo getLang('contact') ?></a></li>
                            <li><a href="<?php echo getHref('about') ?>" class="header-nav-link"><?php echo getLang('about') ?></a></li>
                        </ul>
                    </nav>
                    <div class="lang-select" id="lang-select">
                        <?php generateLanguageSelector(true) ?>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="about-head">
                <div class="container">
                    <h2 class="title about-title">
                        <?php echo getLang('about_title') ?>
                    </h2>
                    <p class="text about-text">
                        <?php echo getLang('about_text') ?>
                    </p>
                </div>
            </section>
            <section class="content">
                <div class="container">
                    <div class="info">
                        <h2 class="title">
                            <?php echo getLang('about_content_title') ?>
                        </h2>
                        <p class="text">
                            <?php echo getLang('about_content_text_1') ?>
                        </p>
                        <p class="text">
                            <?php echo getLang('about_content_text_2') ?>
                        </p>
                    </div>
                    <div class="info-image">
                        <img src="/assets/images/about-image.webp" alt="<?php echo getLang('about_content_img_alt') ?>">
                    </div>
                </div>
            </section>

            <section class="period">
                <div class="container">
                    <div class="period-content">
                        <?php
                        /** @var array $periods */
                        $periods = getLang('period');

                        if (is_array($periods)):
                            foreach ($periods as $item):
                                ?>
                                <div class="period-item">
                                    <div class="item-details">
                                        <?php echo $item['date'] ?? ''; ?>
                                    </div>
                                    <p class="item-text"><?php echo $item['title'] ?? ''; ?></p>
                                    <div class="item-description">
                                        <p><?php echo $item['description'] ?? ''; ?></p>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </section>
            <section class="investment">
                <div class="container">
                    <h2 class="common-title investment-title">
                        <?php echo getLang('investment_title') ?>
                    </h2>
                    <p class="common-text investment-text">
                        <?php echo getLang('investment_text') ?>
                    </p>
                    <a href="<?php echo getHref('') ?>" class="btn btn-primary">
                        <?php echo getLang('investment_btn') ?>
                    </a>
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
                                <a href="<?php echo getHref('contact') ?>" class="nav-link"><?php echo getLang('contact') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo getHref('about') ?>" class="nav-link"><?php echo getLang('about') ?></a>
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