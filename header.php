<?php
/**
 * header elements
 *
 * @package app

 */

?> 

<!DOCTYPE html>
<html <?php language_attributes();?>>
    
<head>
<meta charset="<?php bloginfo('charset');?>"/>
<meta name="viewport" content="initial-scale=1, width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    


      <?php wp_head(); ?>
    
</head>
    
<body  id="app-theme" <?php body_class();?>>  
        <div class="primary-menu">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <i  id="shownavi" class="fa fa-bars icon-one" aria-hidden="true"></i>

            <div class="blogtitle">
            <?php bloginfo( 'name' )?>
                </div>
            <i class="fa fa-ellipsis-h icon-three" aria-hidden="true"></i>
            <i class="fa fa-search icon-two" aria-hidden="true"></i>
                    <div class="searchprime">
        <?php get_search_form(); ?>
        </div>
        </div>
    <nav class="navi">
            <?php 
            if ( has_nav_menu( 'Prime_App_Menu' ) ) {
            /* if the menu exists, require it */
                 wp_nav_menu( array( 'theme_location' => 'Prime_App_Menu')) ;
            }
            ?> 
        </nav>
    
    <sidebar>
    
<?php if ( is_active_sidebar( 'app-sidebar' ) ) { ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'app-sidebar' ); ?>
	</ul>
<?php } ?>
    </sidebar>

     
     
        