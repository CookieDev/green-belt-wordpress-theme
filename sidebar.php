<?php
/**
 * The Sidebar containing the primary widget area.
 */
?>

	<div id="sidebar">
		
            <div id="sidebar-top"></div>
	
		<ul class="xoxo" id="sidebar-main">

<?php
/* When we call the dynamic_sidebar() function, it'll spit out
 * the widgets for that widget area. If it instead returns false,
 * then the sidebar simply doesn't exist, so we'll hard-code in
 * some default sidebar stuff just in case.
 */
if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

		

		<li>
			<h3><?php _e( 'Archives', 'twentyten' ); ?></h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>

		<li>
			<h3><?php _e( 'Meta', 'twentyten' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>

	<?php endif; ?>
		</ul>

            <div id="sidebar-bottom"></div>
            
	</div>