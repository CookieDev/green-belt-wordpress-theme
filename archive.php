<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<section id="content">
	
		<?php
			/* Queue the first post, that way we know
			 * what date we're dealing with (if that is the case).
			 *
			 * We reset this later so we can run the loop
			 * properly with a call to rewind_posts().
			 */
			if ( have_posts() )
				the_post();
		?>
		
		<h1>
		<?php if ( is_day() ) : ?>
						<?php printf( __( 'Daily Archives: %s', 'twentyten' ), get_the_date() ); ?>
		<?php elseif ( is_month() ) : ?>
						<?php printf( __( 'Monthly Archives: %s', 'twentyten' ), get_the_date('F Y') ); ?>
		<?php elseif ( is_year() ) : ?>
						<?php printf( __( 'Yearly Archives: %s', 'twentyten' ), get_the_date('Y') ); ?>
		<?php else : ?>
						<?php _e( 'Blog Archives', 'twentyten' ); ?>
		<?php endif; ?>
		</h1>
	
		<?php
		/* Since we called the_post() above, we need to
		 * rewind the loop back to the beginning that way
		 * we can run the loop properly, in full.
		 */
		rewind_posts();
	
		/* If there are no posts to display, such as an empty archive page */ 
		if (!have_posts()) : ?>
		
			<div class="notice">
				<p>Sorry, nichts gefunden.</p>
			</div>
			<?php get_search_form(); ?>
			
		<?php endif; ?>
		
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<header>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<time pubdate datetime="<?php the_time('c'); ?>"><?php printf( __('Posted on %s at %s.','roots'), get_the_time('l, F jS, Y'), get_the_time()) ?></time>
					<p class="byline author vcard"><span class="fn"><?php the_author(); ?></span></p>
				</header>
				
				<?php the_content(__( 'Continue reading &rarr;', 'twentyten' )); ?>
				
				<footer>
					<p>Kategorie: <?php the_category(', ') ?></p>
					<p>Tags: <?php the_tags(', ') ?></p>
				</footer>
								
			</article>
			
		<?php endwhile; ?>

	</section>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
