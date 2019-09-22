<?php
/*
Template Name: No Sidebar Template
*/
?>

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
		
		<?php echo $type; ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 
			<h2><?php the_title() ;?></h2>
			<p><?php the_category(); ?></p>
			
			<?php if($type != 'portfolio') { ?>
				<p><?php the_author(); ?></p>
				<p class="author-date"><?php the_date('j M y'); ?></p>
			<?php } ?>
			
			
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
	 
		 <?php endwhile; else: ?>
	 
		 <p>Sorry, no posts to list</p>
	 
		 <?php endif; ?>

    </article>
	

</div>

<?php get_footer(); ?>

