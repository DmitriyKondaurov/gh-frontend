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
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-home.png" alt="home banner">
                <?php
                // the query
                query_posts('category_id=10&posts_per_page=1');
                if ( have_posts() ) :
                // pagination here
                the_posts_pagination( array( 'mid_size'  => 4, 'prev_text' => __( 'Back', 'textdomain' ),
                                             'next_text' => __( '' ), ) );
	            // main loop
                while (have_posts()) : the_post(); ?>
                    <h2> <?php  the_title() ?> </h2>
                    <div><?php the_content(); ?></div>
	            <?php endwhile;
	                wp_reset_postdata();
                    else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                <h3>Latest Blog Post</h3>
	            <?php
	            // the query
	            query_posts('cat=4&posts_per_page=4');
	            if ( have_posts() ) :
		            // main loop
		            while (have_posts()) : the_post(); ?>
                        <div class="latest_blog_date"><?php echo get_the_date( 'j F') ?></div>
                        <div class="latest_blog_content">
                            <h2> <?php  the_title() ?> </h2>
                            <div><i class="fa fa-comment" aria-hidden="true"></i><span><?php echo
			                        get_comments_number()?></span> <span>Comments</span></div>
                            <div><i class="fa fa-folder-open" aria-hidden="true"></i> <span><?php echo get_cat_name(4) ?></span></div>
                            <p><?php the_excerpt(); ?></p>
                        </div>
		            <?php endwhile;
		            // pagination
		            the_posts_pagination( array( 'mid_size'  => 5, 'prev_text' => __( 'Back', 'textdomain' ),
		                                                         'next_text' => __( '' ), ) );
		            wp_reset_postdata();
	            else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	            <?php endif; ?>

             </div>
        </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

