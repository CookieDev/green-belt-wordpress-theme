<?php
/**
 * The main template file which displays the posts.
 */

get_header(); ?>
	
<div id="articles">
	
		<?php /* If there are no posts to display, such as an empty archive page */ ?>
		<?php if (!have_posts()) : ?>
		
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
                                        <time class="pubdate" pubdate datetime="<?php the_time('c'); ?>"><?php printf( __('%s','roots'), get_the_time('j. F Y'), get_the_time()) ?></time>
                                        <span class="commentcount"><a href="<?php comments_link(); ?>"><?php comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?></a></span>
				</header>
				
				<?php the_content(__( 'Continue reading &rarr;', 'twentyten' )); ?>
				
				<footer>
					<p>Kategorie: <?php the_category(', ') ?></p>
					<p>Tags: <?php the_tags(', ') ?></p>
				</footer>
								
			</article>
			
		<?php endwhile; ?>
	
</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
