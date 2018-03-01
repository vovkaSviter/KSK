<?php
/**
 * Template Name: Стандарты всех пород
 */

get_header(); ?>

<div class="row">
        <section class="contentMiddle col-xs-12 col-md-push-3 col-md-6">
            <?php
                $args = array(
                    'post_parent' => 28,
                    'post_type' => 'page',
                    'orderby' => 'menu_order'
                );

                $child_query = new WP_Query( $args );
                ?>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

                    <div <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                <?php endwhile; ?>

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
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div><?php the_excerpt(); ?></div>
                <?php endforeach;
                wp_reset_postdata(); ?>


            <h4 class="secondTitle">
                <a href="<?php echo get_page_link(28); ?>"><?php echo get_the_title(28); ?></a>
            </h4>

        </aside>
        <aside class="contentRight col-xs-12 col-md-3">

            <h4 class="firstTitle">
                <a href="<?php echo get_page_link(18); ?>"><?php echo get_the_title(18); ?></a>
            </h4>
            <h4 class="secondTitle">
                <a href="<?php echo get_page_link(42); ?>"><?php echo get_the_title(42); ?></a>
            </h4>

        </aside>
    </div>
</div>






<?php get_footer();