<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Awesomeone
 */
?>
<?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		</div>
<?php } ?>
<div id="sidebar" <?php if( is_page_template('left-sidebar.php')){?> style="float:left;"<?php } ?>>

    <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
    <?php endif; // end sidebar widget area ?>
</div><!-- sidebar -->

<?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		</div>
	</div>
    <div class="clear"></div>
<?php } ?>
