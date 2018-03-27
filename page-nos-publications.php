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
               <h2 class="title-block-wrap">
               <span class="block-title"> <span>Appels d'offre</span> </span> 
                </h2>
                <div class="custom_row">
                    <ul class="badass">
                        <?php 
                            // $example = 'Grevisse';
                            $args = array(
                              'post_type' => 'publicat',
                              'category_name' => 'Appel d\'offre',
                              'orderby'=> 'date',
                              'order'=> 'asc' 
                            );

                            $publication_posts = new WP_Query( $args ) ?>

                            <?php if( $publication_posts->have_posts() ): ?>

                            <?php while ( $publication_posts->have_posts() ) : $publication_posts->the_post(); ?>
                                
                                <li>
                                    <?php get_template_part( 'template-parts/content', 'page-nos-publications' ); ?>
                                    <?php //include( locate_template( 'content-page-nos-publications.php', false, false ) ); ?>

                                </li>

                                <?php
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                ?>

                            <?php endwhile; // End of the loop. ?>
                            
                            <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <h2 class="title-block-wrap">
                    <span class="block-title"> <span>Rapports Annuels</span> </span> 
                </h2>
                <div class="custom_row">
                    <ul class="badass">
                        <?php $args = array(
                            'post_type' => 'publicat',
                            'category_name' => 'Rapports Annuels',
                            'orderby'=> 'date',
                            'order'=> 'asc' 
                        );

                            $publication_posts = new WP_Query( $args ) ?>

                            <?php if( $publication_posts->have_posts() ): ?>

                            <?php while ( $publication_posts->have_posts() ) : $publication_posts->the_post(); ?>
                                
                                <li>
                                    <?php get_template_part( 'template-parts/content', 'page-nos-publications' ); ?>
                                </li>

                                <?php
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                ?>

                            <?php endwhile; // End of the loop. ?>
                            
                            <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <h2 class="title-block-wrap">
                    <span class="block-title"> <span>Autres Documents</span> </span> 
                </h2>
                <div class="custom_row">
                    <ul class="badass">
                        <?php 
                            $category_id1 = get_cat_ID('Rapports Annuels');
                            $category_id2 = get_cat_ID('Appel d\'offre');
                            $args = array(
                            'post_type' => 'publicat',
                            'category__not_in' => array($category_id1, $category_id2),
                            'orderby'=> 'date',
                            'order'=> 'asc' 
                        );

                            $publication_posts = new WP_Query( $args ) ?>

                            <?php if( $publication_posts->have_posts() ): ?>

                            <?php while ( $publication_posts->have_posts() ) : $publication_posts->the_post(); ?>
                                
                                <li>
                                    <?php get_template_part( 'template-parts/content', 'page-nos-publications' ); ?>
                                </li>

                                <?php
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                ?>

                            <?php endwhile; // End of the loop. ?>
                            
                            <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                
	            </div><!-- #primary end -->
               <?php colornews_sidebar_select(); ?>
            </div><!-- #main-content-section end -->
         </div><!-- .tg-inner-wrap -->
      </div><!-- .tg-container -->
   </div><!-- #main -->

   <?php do_action( 'colornews_after_body_content' ); ?>

<?php get_footer(); ?>
