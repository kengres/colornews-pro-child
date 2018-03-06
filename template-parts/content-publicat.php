<div class="publicat_col">
<?php
	$args = array('post_type' => 'publicat', 'orderby'=> 'date', 'order'=> 'asc' );

	$publication_posts = new WP_Query( $args ) ?>

	<?php if( $publication_posts->have_posts() ): ?>

	<?php while ( $publication_posts->have_posts() ) : $publication_posts->the_post(); ?>


<div class="tg-column-2">

<div class="tg-block-wrapper sameHjs">

<h2 class="title-block-wrap">
   <span class="block-title"> <span><?php the_title(); ?></span> </span> 
</h2>

<div class="forExcerpt">
<?php if( $post->post_excerpt ): ?>

   <?php the_excerpt(); ?>
   
<?php else: ?>

   <p><?php echo get_the_excerpt() ?></p>

<?php endif; ?>

   <a href="<?php the_permalink() ?>" class="">Read More about: <?php the_title() ?>&nbsp;<i class="fa fa-angle-double-right"></i></a>
</div>

</div>
</div>


<?php endwhile; // End of the loop. ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>