<?php
/**
 * The pages
 *
 * @package app

 */
?>

<div class="pageheader">
   <?php get_header(); ?>  
</div>


<div id="content">

   <?php if ( have_posts() ) { ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
            
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
        <?php if (! the_title( ' ', ' ', false ) == "" ){?>
                <div class="page-title">
       <?php the_title();?>
            </div>
        <?php }?>
        <div class="single-page">
            <?php the_content(); ?>
        </div>
    </article>
			
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
        
        </div>
<?php get_sidebar(); 

     get_footer(); ?>