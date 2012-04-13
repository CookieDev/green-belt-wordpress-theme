<?php
/**
 * The template for displaying the footer.
 */
?>
	
		<footer id="unten">
			<p><small>
				<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> | 
				<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>
			</small></p>
			<p><small>
				<a href="https://github.com/kremalicious/minimalmuk">minimalMuk Theme</a> by <a href="http://matthiaskretschmann.com/">Matthias Kretschmann</a> &amp; <a href="http://www.anketornow.de/">Anke Tornow</a>
			</small></p>
		</footer>
	
	</div> <!--END #wrapper-->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
