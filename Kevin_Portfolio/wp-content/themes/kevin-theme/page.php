<?php get_header(); ?>


<div id="main">
    <article id="main-content">
        
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
            <h2><?php the_title(); ?></h2>
            
            <?php the_content(); ?>
        
                        
        <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, it broke' ); ?></p>
        <?php endif; ?>
        
    </article>

</div>

<?php get_footer(); ?>