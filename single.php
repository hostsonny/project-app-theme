<?php
/**
 * The single posts
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
        <div class="post-title">
       <?php the_title();?>
            </div>
         <?php }?>
        <div class="app-single-post">
            <?php the_date(); ?>
            <?php the_content(); ?>
            <div class="tags">
                               <?php echo the_tags(); ?>
                           </div>
        
                <div class="singlecat">
            <p><?php _e("Categories: ", "app"); the_category(", ", "single");  ?></p>
        </div>
            </div>
         <?php
        wp_list_comments();
        comments_template();

        ?>
    <div class="nav-links">
            <?php
            if ( is_attachment() ) {?>
        <div class="prevp">
              <?php  previous_post_link( '%link', __( '<span class="meta-prev">Published In</span>', 'app' ) ); ?>
            
            </div>
           <?php } else { ?>
        <div class="prevp">
                <?php previous_post_link( '%link', __( '<span class="meta-prev">Previous Post</span>', 'app' ) ); ?>
        </div>
        
        <div class="nextp">
               <?php next_post_link( '%link', __( '<span class="meta-next">Next Post</span>', 'app' ) );
            ?>
        </div>
        <?php }?>
        </div><!-- .nav-links -->

                  
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


        
        </div>
        <?php get_sidebar(); 

     get_footer(); ?>