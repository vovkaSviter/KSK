<?php
/**
 * Template Name: Стандарт одной породы
 */

get_header(); ?>

<div class="row">
        <section class="contentMiddle col-xs-12 col-md-push-3 col-md-6">

            <?php
                $pagename = get_query_var('pagename');
                $args = array('tag' => $pagename);
                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                    echo '<ul>';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        echo '<li><a href="'. get_permalink() .'">' . get_the_title() . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'Сорян';
                }
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
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div><?php the_excerpt(); ?></div>
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
                    <a href="<?php the_permalink(); ?>">
                        <?php echo wp_get_attachment_image($post_thumbnail_id); the_title(); ?>
                    </a>
                    <div><?php the_excerpt(); ?></div>
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
                    <a href="<?php the_permalink(); ?>">
                        <?php echo wp_get_attachment_image($post_thumbnail_id); the_title(); ?>
                    </a>
                    <div><?php the_excerpt(); ?></div>
                <?php endforeach;
                wp_reset_postdata();
            ?>

        </aside>
    </div>
</div>






<?php get_footer();
