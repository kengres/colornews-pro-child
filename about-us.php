<?php

/*

 Template Name: About Us

 */

get_header(); ?>



   <?php do_action( 'colornews_before_body_content' ); ?>



   <div id="main" class="clearfix">

      <div class="tg-container">

         <div class="tg-inner-wrap clearfix">

            <div id="main-content-section clearfix">

               <div id="primary" class="row">
                  <div class="equal_height">

                     <?php get_template_part( 'template-parts/content', 'a_propos' ); ?>
                        
   	            </div>
               </div><!-- #primary end -->
               <?php get_template_part( 'template-parts/content', 'partners' ); ?>

            </div><!-- #main-content-section end -->

         </div><!-- .tg-inner-wrap -->

      </div><!-- .tg-container -->

   </div><!-- #main -->



   <?php do_action( 'colornews_after_body_content' ); ?>



<?php get_footer(); ?>

