<div id="secondary" class="partenaires">
   <div class="widget colornews_custom_widget">
      <div class="tg-block-wrapper clearfix darkBg">
         <div class="title-block-wrap clearfix">
            <span class="block-title">
               <span>Nos Partenaires</span>
            </span>
         </div>
         <div class="featured-post-wrapper clearfix">
         <div class="flexParent">

         <?php
            $args = array('post_type' => 'partenaire', 'orderby'=> 'date', 'order'=> 'asc' );

            $partner_posts = new WP_Query( $args ) ?>

            <?php if( $partner_posts->have_posts() ): ?>

            <?php while ( $partner_posts->have_posts() ) : $partner_posts->the_post(); ?>
            <?php $link = get_post_meta( get_the_ID(), 'Link', true ); ?>

            <div class="partner flexChild">
               <div class="partner_img">
                  <?php if ( $link ): ?>
                     <?php $www = 'http://' ?>
                     <a href="<?php echo $www.$link; ?>" target="_blank"><?php the_post_thumbnail('full', array('class'=>'img_responsive')) ?></a>
                  <?php else: ?>
                     <?php the_post_thumbnail('full', array('class'=>'img_responsive')) ?>
                  <?php endif; ?>
               </div>
            </div>
            

            <?php endwhile; // End of the loop. ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
         </div>
         </div>
      </div>
   </div>
</div>