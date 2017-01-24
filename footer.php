<?php
/**
 * The footer
 *
 * @package app

 */
?>



<footer class="footer">

<?php wp_footer(); if (class_exists("woocommerce")){?>

    <ul>
        <li ><a id="footer-icon-one" href="<?php echo get_page_uri( get_option( 'Project_App_home', 0 )); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a id="footer-icon-two" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a id="footer-icon-three" href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
    </ul>
<?php } ?>
</footer>
<div class="modal"></div>
</body>
</html>