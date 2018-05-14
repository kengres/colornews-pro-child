<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package ThemeGrill

 * @subpackage ColorNews

 * @since ColorNews 1.0
 * 
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

