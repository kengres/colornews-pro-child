<?php $param = array('post_type' => 'contact_form', );

$program_posts = new WP_Query( $param ) ?>

<?php if( $program_posts->have_posts() ): ?>

<?php while ( $program_posts->have_posts() ) : $program_posts->the_post(); ?>

<?php the_content(); ?>



<?php endwhile; // End of the loop. ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


