<?php
/**
 * The template for displaying all pages (instead of posts)
 */

get_header(); ?>

	<section id="content">
	
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<header>
					<h1><?php the_title(); ?></h1>
					<p class="byline author vcard"><span class="fn"><?php the_author(); ?></span></p>
				</header>
				
				<?php the_content(); ?>
				
			</article>
			
		<?php endwhile; ?>
	
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
