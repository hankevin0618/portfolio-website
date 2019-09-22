<?php

$category = get_the_category();
$category_parent_id = 0;
if(isset($category[0]->category_parent)) {
$category_parent_id = $category[0]->category_parent;
}


?>



<?php get_header(); ?>


<div id="main">

    <article id="main-content" class="type-<?php echo $type; ?>">
		
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 
			<h2 class="page-title"><?php the_title() ;?></h2>
			<!-- <p><?php the_category(); ?></p> -->
			<p class="author-font"><?php the_author(); ?></p>
			<p class="author-font"><?php the_date('j M y'); ?></p>
			
			<br>
			<?php the_post_thumbnail('medium_large'); ?>
			<br>
			<?php the_content(); ?>
	 
		 <?php endwhile; else: ?>
	 
		 <p>Sorry, no posts to list</p>
	 
		 <?php endif; ?>

    </article>
	
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
