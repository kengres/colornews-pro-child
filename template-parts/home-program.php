<h2 class="title-block-wrap">
   <span class="block-title"> <span>Nos actions / Réalisations</span> </span> 
</h2>
<div id="home_flex" class="flexParent">
<?php
	$args = array('post_type' => 'actions', 'orderby'=> 'date', 'order'=> 'asc' );

	$action_posts = new WP_Query( $args ) ?>

	<?php if( $action_posts->have_posts() ): ?>

	<?php while ( $action_posts->have_posts() ) : $action_posts->the_post(); ?>

	<?php $icon = get_post_meta( get_the_ID(), 'Icon', true ); ?>

   <div class="flexChild home_child_flex">
      
      <div class="icon_wrap">

         <?php if ( $icon ): ?>
            <i class="fa <?php echo $icon; ?>"></i>
         <?php else: ?>
            <i class="fa fa-medkit"></i>
         <?php endif; ?>

      </div>

      <div class="description_wrap sameHjs">
         <h3 class="description_title"><?php the_title(); ?></h3>

         <div class="forExcerpt">
         <?php if( $post->post_excerpt ): ?>

            <?php the_excerpt(); ?>
            
         <?php else: ?>

            <p><?php echo get_the_excerpt() ?></p>

         <?php endif; ?>
            <div class="middleBottom">
            <a href="<?php the_permalink() ?>" class="excerptLink">Read More <i class="fa fa-angle-double-right"></i></a>
            </div>
         </div>
         
      </div>
   </div>

	<?php endwhile; // End of the loop. ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>