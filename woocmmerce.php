<?php
/**
 * The woo pages
 *
 * @package app

 */
?>

<div class="pageheader">
   <?php get_header(); ?>  
</div>


<div id="content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
   <?php if ( have_posts() ) { ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
            
    
            <?php woocommerce_content(); ?>
    
			
			<?php 
                        // End the loop.
                        endwhile;
             		// If no content, include the "No posts found" template.
}
		else {
			 get_template_part( 'template-parts/content', 'none' ); 

		}
             ?>

<div class="clear"></div>
        </article>
        </div>
        <?php get_sidebar(); 

     get_footer(); ?>