<div class="about_col">
<?php
	$args = array('post_type' => 'a_propos', 'orderby'=> 'date', 'order'=> 'asc' );

	$a_propos_posts = new WP_Query( $args ) ?>

	<?php if( $a_propos_posts->have_posts() ): ?>

	<?php while ( $a_propos_posts->have_posts() ) : $a_propos_posts->the_post(); ?>


<div class="tg-column-1">

<div class="tg-block-wrapper">

<h2 class="title-block-wrap">
   <span class="block-title"> <span><?php the_title(); ?></span> </span> 
</h2>

<div class="forExcerpt">
<?php if( $post->post_excerpt ): ?>

   <?php the_excerpt(); ?>
   
<?php else: ?>

   <p><?php echo get_the_excerpt() ?></p>

<?php endif; ?>
<p align="center">
   <a href="<?php the_permalink() ?>" class="excerptLink">Read More... <i class="fa fa-angle-double-right"></i></a>
</p>
</div>

</div>
</div>


<?php endwhile; // End of the loop. ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>