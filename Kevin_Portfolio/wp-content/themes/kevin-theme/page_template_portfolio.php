<?php
/*
Template Name: Portfolio Template
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

<div id='portfolio-temple-container'>
    <section id='portfolio-temple'>
                <?php echo $type; ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             
                   <h2><?php the_title() ;?></h2>
                  <p><?php the_category(); ?></p>
                    

                
                    
                    
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
             
               <?php endwhile; else: ?>
             
             <p>Sorry, no posts to list</p>
             
             <?php endif; ?>
                
                <?php echo do_shortcode('[metaslider id=154]'); ?>

                <?php echo do_shortcode('[metaslider id=160]'); ?>
 
    </section>
</div>	


<?php get_footer(); ?>

