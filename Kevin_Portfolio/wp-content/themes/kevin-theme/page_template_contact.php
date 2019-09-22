<?php
/*
Template Name: Contact Template
*/
?>

<?php get_header(); ?>

<div id="main">
    <article id="main-content">
        
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
            <h2><?php the_title(); ?></h2>
            
            <?php the_content(); ?>
    
    <section id='contact-form'>
        <?php echo do_shortcode('[contact-form-7 id="79" title="Contact form 1"]'); ?>
    </section>
                        
        <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, it broke' ); ?></p>
        <?php endif; ?>
        
    </article>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>