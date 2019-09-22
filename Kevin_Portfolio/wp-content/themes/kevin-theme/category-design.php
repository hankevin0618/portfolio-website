<?php get_header(); ?>


<div id="main">
    <article id="category-main-content">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>">
				<?php the_title() ;?>

				</a>
			</h2>
			<?php the_post_thumbnail('medium'); ?>
			<p class="author-font"><?php the_author(); ?></p>
			<p class="author-font"><?php the_date('j M y'); ?></p>

	 
		 <?php endwhile; ?>
		 	 
		 
		 <?php else: ?>
	 
		 <p>Sorry, no posts to list</p>
	 
		 <?php endif; ?>

    </article>
	
	

</div>

<?php get_footer(); ?>
