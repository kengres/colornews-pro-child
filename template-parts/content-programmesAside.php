<div id="secondary" class="programmesWidget">
   <div class="widget colornews_custom_widget">
      <div class="tg-block-wrapper clearfix darkBg">
         <div class="title-block-wrap clearfix">
            <span class="block-title">
               <span>Tous nos programmes</span>
            </span>
         </div>
         <div class="featured-post-wrapper clearfix">
         <div class="flexParents">
          <ul class="programmeList">
            <?php
                $args = array('post_type' => 'programmes', 'orderby'=> 'date', 'order'=> 'asc' );

                $programme_posts = new WP_Query( $args ) ?>

                <?php if( $programme_posts->have_posts() ): ?>

                <?php while ( $programme_posts->have_posts() ) : $programme_posts->the_post(); ?>

                <li>
                  <a href="<?php the_permalink() ?>" class="">
                    <?php the_title() ?>
                  </a>
                </li>
                

                <?php endwhile; // End of the loop. ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
         </div>
         </div>
      </div>
   </div>
</div>