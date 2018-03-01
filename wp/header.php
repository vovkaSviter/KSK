<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <div class="row">
            <header class="pageHeader col-xs-12">
                <section class="body row">

                    <div class="logo col-xs-12 col-md-6">
                        <div class="row">
                            <div class="mainLogo bgImgContain col-xs-12 col-md-8 pull-left"></div>
                            <div class="extraLogo eL1 bgImgContain hidden-xs hidden-sm col-md-4 pull-right"></div>
                            <div class="extraLogo eL2 bgImgContain hidden-xs hidden-sm col-md-4 pull-right"></div>
                        </div>
                    </div>
                    <div class="slider hidden-xs hidden-sm col-md-6">
                        <?php echo do_shortcode('[owl-carousel category=”homeheader” items=”1″ autoPlay=”true”]')?>
                    </div>

                </section>
                <nav class="row">
                    <ul class="sup">
                        <li class="col-xs-12 col-md-2">
                            <a href="<?php echo get_page_link(16); ?>">Клуб</a>
                            <ul class="sub">
                                <li>
                                    <a href="<?php echo get_page_link(20); ?>"><?php echo get_the_title(20); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(22); ?>"><?php echo get_the_title(22); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(24); ?>"><?php echo get_the_title(24); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(46); ?>"><?php echo get_the_title(46); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(30); ?>"><?php echo get_the_title(30); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(32); ?>"><?php echo get_the_title(32); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(26); ?>"><?php echo get_the_title(26); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(28); ?>"><?php echo get_the_title(28); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(34); ?>"><?php echo get_the_title(34); ?></a>
                                </li>

                            </ul>
                        </li>
                        <li class="col-xs-12 col-md-2">
                            <a href="<?php echo get_page_link(18); ?>"><?php echo get_the_title(18); ?></a>
                            <ul class="sub">
                                <li>
                                    <a href="<?php echo get_page_link(36); ?>"><?php echo get_the_title(36); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(38); ?>"><?php echo get_the_title(38); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="col-xs-12 col-md-2">
                            <a href="<?php echo get_page_link(40); ?>"><?php echo get_the_title(40); ?></a>
                        </li>
                        <li class="col-xs-12 col-md-2">
                            <a href="<?php echo get_page_link(42); ?>"><?php echo get_the_title(42); ?></a>
                        </li>
                        <li class="col-xs-12 col-md-2">
                            <a href="<?php echo get_page_link(44); ?>"><?php echo get_the_title(44); ?></a>
                        </li>
                        <li class="socials col-xs-12 col-md-2">
                            <a href="#" class="bgImgCover vk"></a>
                            <a href="#" class="bgImgCover ok"></a>
                            <a href="#" class="bgImgCover fb"></a>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>