<?php
/**
 * Template Name: Контакты
 */

get_header(); ?>

<div class="row">
        <section class="contentMiddle col-xs-12 col-md-push-3 col-md-6">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <?php
                while ( have_posts() ) : the_post(); ?>
                    <div class="entry-content-page">
                        <?php the_content(); ?>
                    </div>

                <?php
                endwhile;
                wp_reset_query();
            ?>

            <div id="contactsMap" style="width: 100%; height: 350px"></div>
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
            <script type="text/javascript">
                ymaps.ready(init);
                var myMap,
                    myPlacemark;

                function init(){
                    myMap = new ymaps.Map("contactsMap", {
                        center: [44.924425, 34.129758],
                        zoom: 15,
                        controls: ["zoomControl"]
                    });
                    myMap.behaviors.disable('scrollZoom');

                    myPlacemark = new ymaps.Placemark([44.924425, 34.129758], {
                        hintContent: '!',
                        balloonContent: 'г. Симферополь<br> ул. Зои Рухадзе, 27/21<br> тел. 8 (978) 895-77-37'
                    });

                    myMap.geoObjects.add(myPlacemark);
                    myPlacemark.balloon.open();

                }
            </script>

        </section>

        <aside class="contentLeft col-xs-12 col-md-3 col-md-pull-6">

            <h4 class="firstTitle">
                <a href="<?php echo get_page_link(26); ?>"><?php echo get_the_title(26); ?></a>
            </h4>


                <?php
                global $post;
                $args = array( 'posts_per_page' => 1, 'category' => 4, 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) :
                  setup_postdata( $post ); ?>
                    <a href="<?php the_permalink(); ?>" class="sideTitle"><?php the_title(); ?></a>
                    <div class="sideExcerpt"><?php the_excerpt(); ?></div>
                <?php endforeach;
                wp_reset_postdata(); ?>


            <h4 class="secondTitle">
                <a href="<?php echo get_page_link(28); ?>"><?php echo get_the_title(28); ?></a>
            </h4>

            <?php
                global $post;
                $args = array( 'posts_per_page' => 1, 'tag' => 'statya-o-standartah', 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) :
                    setup_postdata( $post ); ?>
                    <a href="<?php the_permalink(); ?>" class="sideTitle"><?php the_title(); ?></a>
                    <div class="sideExcerpt"><?php the_excerpt(); ?></div>
                <?php endforeach;
                wp_reset_postdata();
            ?>

        </aside>
        <aside class="contentRight col-xs-12 col-md-3">

            <h4 class="firstTitle">
                <a href="<?php echo get_page_link(18); ?>"><?php echo get_the_title(18); ?></a>
            </h4>

            <?php
                global $post;
                $args = array( 'posts_per_page' => 1, 'tag' => 'statya-dlya-vyazki', 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) :
                    setup_postdata( $post );
                    $post_thumbnail_id = get_post_thumbnail_id();?>
                    <a href="<?php the_permalink(); ?>" class="sideTitle">
                        <?php echo wp_get_attachment_image($post_thumbnail_id); the_title(); ?>
                    </a>
                    <div class="sideExcerpt"><?php the_excerpt(); ?></div>
                <?php endforeach;
                wp_reset_postdata();
            ?>

            <h4 class="secondTitle">
                <a href="<?php echo get_page_link(42); ?>"><?php echo get_the_title(42); ?></a>
            </h4>

            <?php
                global $post;
                $args = array( 'posts_per_page' => 1, 'tag' => 'statya-o-shhenkah', 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) :
                    setup_postdata( $post );
                    $post_thumbnail_id = get_post_thumbnail_id();?>
                    <a href="<?php the_permalink(); ?>" class="sideTitle">
                        <?php echo wp_get_attachment_image($post_thumbnail_id); the_title(); ?>
                    </a>
                    <div class="sideExcerpt"><?php the_excerpt(); ?></div>
                <?php endforeach;
                wp_reset_postdata();
            ?>

        </aside>
    </div>
</div>






<?php get_footer();