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
 */
get_header(); ?>

   <?php do_action( 'colornews_before_body_content' ); ?>

   <div id="main" class="clearfix">
      <div class="tg-container">
         <div class="tg-inner-wrap clearfix">
            <div id="main-content-section clearfix">
               <div id="primary">
               <?php 
                    $title = 'Appels d\'offre';
                    $cat = 'Appels d\'offre';
                    include(get_stylesheet_directory() . '/inc/publication_loop.php'); ?>
               
                <?php 
                    $title = 'Rapports Annuels';
                    $cat = 'Rapports Annuels';
                    include(get_stylesheet_directory() . '/inc/publication_loop.php'); ?>
                
                <?php 
                    $title = 'Autres Documents';
                    $cat = null;
                    include(get_stylesheet_directory() . '/inc/publication_loop.php'); ?>
                
	            </div><!-- #primary end -->
               <?php colornews_sidebar_select(); ?>
            </div><!-- #main-content-section end -->
         </div><!-- .tg-inner-wrap -->
      </div><!-- .tg-container -->
   </div><!-- #main -->

   <?php do_action( 'colornews_after_body_content' ); ?>

<?php get_footer(); ?>
