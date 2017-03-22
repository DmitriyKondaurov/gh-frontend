<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lesson23
 */
get_header(); ?>
	<main id="main" class="site-main" role="main">
		<div class="container">
            <div class="row">
                <?php
                // the query
                $the_query = new WP_Query( array( 'category_name' => 'home_banner' ) ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                    <!-- pagination here -->
                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><?php the_content(); ?></div>
			        <?php endwhile; ?>
                    <!-- end of the loop -->
                    <!-- pagination here -->
    			    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		        <?php endif; ?>
             </div>
        </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

