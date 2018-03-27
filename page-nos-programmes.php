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

   <div id="main" class="clearfix nosprogrammes">
      <div class="tg-container">
         <div class="tg-inner-wrap clearfix">
            <div id="main-content-section clearfix">
               <div id="primary">
                <div class="custom_row">
                    <?php $param = array('post_type' => 'programmes', 'orderby'=> 'date', 'order'=> 'asc' );

                        $program_posts = new WP_Query( $param ) ?>

                        <?php if( $program_posts->have_posts() ): ?>

                        <?php while ( $program_posts->have_posts() ) : $program_posts->the_post(); ?>

                            <?php get_template_part( 'template-parts/content', 'page-nos-programmes' ); ?>

                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>

                        <?php endwhile; // End of the loop. ?>
                        
                        <?php endif; ?>

                    <?php wp_reset_postdata(); ?>
                </div>
                
	            </div><!-- #primary end -->
               <?php colornews_sidebar_select(); ?>
            </div><!-- #main-content-section end -->
         </div><!-- .tg-inner-wrap -->
      </div><!-- .tg-container -->
   </div><!-- #main -->

   <?php do_action( 'colornews_after_body_content' ); ?>

<?php get_footer(); ?>
