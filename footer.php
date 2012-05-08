<?php
/**
 * The template for displaying the footer.
 */
?>
                <footer>
                    <?php dynamic_sidebar('first-footer-widget-area'); ?>
		</footer>
            </div>
	</div>
        
		
	
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
