<?php

/*

Template Name: Contact Us

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

 */

get_header(); ?>



   <?php do_action( 'colornews_before_body_content' ); ?>



   <div id="main" class="clearfix">

      <div class="tg-container">

         <div class="tg-inner-wrap clearfix">

            <div id="main-content-section clearfix">

               <div id="primary">
                  <div class="myRow">
                     
                     <div class="tg-column-2">

                        <div class="tg-block-wrapper darkBg">
                           <h2 class="title-block-wrap">
                              <span class="block-title"> <span>Completer le Formulaire</span> </span> 
                           </h2>

                           <div class="contact_form">
                              <?php get_template_part( 'template-parts/content', 'form' ); ?>
                           </div>
                        </div>

                     </div>
                     <div class="tg-column-2">

                        <div class="tg-block-wrapper darkBg multiple_wrapper">
                           <h2 class="title-block-wrap">
                              <span class="block-title"> <span>Addresse</span> </span> 
                           </h2>

                           <address class="address-block">

                              <div class="address-block-content">
                                <div class="address-icon"><i class="fa fa-map-marker "></i></div>
                                <div> Avenue des USA, &#8470;&nbsp;18</div>
                              </div>

                              <div class="address-block-content">
                                <div class="address-icon"><i class="fa fa-envelope"></i></div>
                                <div>BP 323, Bujumbura</div>
                              </div>

                              <div class="address-block-content">
                                <div class="address-icon"><i class="fa fa-mobile "></i></div>
                                <div> Téléphone: +257 28 88 71</div>
                              </div>

                              <div class="address-block-content">
                                <div class="address-icon"><i class="fa fa-phone "></i></div>
                                <div> Hot Line: 109</div>
                              </div>

                              <div class="address-block-content">
                                <div class="address-icon"><i class="fa fa-envelope-o "></i></div>
                                <div> Email: info@crb.bi</div>
                              </div>


                           </address>
                        </div>

                        <div class="tg-block-wrapper multiple_wrapper clearfix">
                           <h2 class="title-block-wrap">
                              <span class="block-title"> <span>Google Map</span> </span> 
                           </h2>

                           <div id="googleMap">
                              <?php get_template_part( 'template-parts/content', 'map' ); ?>
                           </div>
                        </div>

                     </div>
                     

               </div><!-- #primary end -->
               <?php //colornews_sidebar_select(); ?>
               </div>
            </div><!-- #main-content-section end -->

         </div><!-- .tg-inner-wrap -->

      </div><!-- .tg-container -->

   </div><!-- #main -->



   <?php do_action( 'colornews_after_body_content' ); ?>



<?php get_footer(); ?>

