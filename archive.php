<?php
/**
 * The archives
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
        <div class="post-title">
       <a href="<?php the_permalink() ?>"><?php the_title();?></a>
            </div>
        <div class="excerpt">
            <?php the_date(); ?>
            <?php the_excerpt(); ?>
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