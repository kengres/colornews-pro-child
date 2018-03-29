<h2 class="title-block-wrap">
  <span class="block-title">
    <span><?php echo $title; ?></span>
  </span> 
</h2>
<div class="custom_row">
  <?php // var_dump($cat); ?>
  <ul class="publication">
      <?php
          $category_id1 = get_cat_ID('Rapports Annuels');
          $category_id2 = get_cat_ID('Appel d\'offre');
          $args = array(
            'post_type' => 'publicat',
            'orderby'=> 'date',
            'order'=> 'asc',
            'cat' => ''
          );

          if ($cat == 'Rapports Annuels') {
            $args['cat'] = $category_id1;
            $args['category__not_in'] = [];
          } elseif ($cat == 'Appels d\'offre') {
            $args['cat'] = $category_id2;
            $args['category__not_in'] = [];
          } else {
            $args['cat'] = '';
            $args['category__not_in'] = array($category_id1, $category_id2);
          }
         
          // var_dump($args);

          $publication_posts = new WP_Query( $args ) ?>

          <?php if( $publication_posts->have_posts() ): ?>

          <?php while ( $publication_posts->have_posts() ) : $publication_posts->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="publication__link">
              <li class="publication__item">
                  <?php get_template_part( 'template-parts/content', 'page-nos-publications' ); ?>
              </li>
            </a>

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