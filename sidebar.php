<?php
/**
 * The sidebar 
 *
 * @package app
 */

?>

<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<ul class="sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</ul>
<?php } ?>


