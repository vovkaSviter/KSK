<?php
/**
 * Template Name: Щенки
 */

get_header(); ?>

<div class="row">
        <section class="contentMiddle col-xs-12 col-md-push-3 col-md-6">

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <?php

                $args = array( 'tag' => 'statya-o-shhenkah');
                $child_query = new WP_Query( $args );
                ?>

                <ul <?php post_class(); ?>>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>


                        <li class="row">
                            <a href="<?php the_permalink(); ?>" class="col-xs-12">
                                <div class="row">
                                    <?php
                                        $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                     ?>
                                    <div class="imgKeeper bgImgContain col-xs-12 col-md-2" style="background-image: url('<?php echo $bgImg[0] ?>'); height: 100px"></div>
                                    <h4 class="col-xs-12 col-md-10"><?php the_title(); ?></h4>
                                    <div class="hidden-xs hidden-sm col-md-10 pull-right"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        </li>

                <?php endwhile; ?>

                </ul>

                <?php
                wp_reset_postdata();
            ?>

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
                wp_reset_postdata();
            ?>
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
