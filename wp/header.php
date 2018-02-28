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
                    slider
                </div>

            </section>
            <nav class="row">
                <ul class="sup">
                    <li class="col-xs-12 col-md-2">
                        <a href="#">Клуб</a>
                        <ul class="sub">
                            <li><a href="#">Документация</a></li>
                            <li><a href="#">Наши специалисты</a></li>
                            <li><a href="#">Дрессировка</a></li>
                            <li><a href="#">Фото выставок КСК</a></li>
                        </ul>
                    </li>
                    <li class="col-xs-12 col-md-2">
                        <a href="#">Собаки на вязку</a>
                        <ul class="sub">
                            <li><a href="#">Кобели</a></li>
                            <li><a href="#">Сцуки</a></li>
                        </ul>
                    </li>
                    <li class="col-xs-12 col-md-2">
                        <a href="#">Племенные заводы</a>
                    </li>
                    <li class="col-xs-12 col-md-2">
                        <a href="#">Щенки</a>
                    </li>
                    <li class="col-xs-12 col-md-2">
                        <a href="#">Контакты</a>
                    </li>
                    <li class="socials col-xs-12 col-md-2">
                        <a href="#" class="bgImgCover vk"></a>
                        <a href="#" class="bgImgCover ok"></a>
                        <a href="#" class="bgImgCover fb"></a>
                    </li>
                </ul>
            </nav>
        </header>
