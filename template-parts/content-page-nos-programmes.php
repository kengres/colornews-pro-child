<div class="tg-column-2 myBoxModel">
    <div class="tg-block-wrapper poR sameHjs" style="position: relative">
        <h2 class="title-block-wrap">
            <span class="block-title"> <span><?php the_title(); ?></span> </span> 
        </h2>

        <?php if($post->post_excerpt) {
            echo wpautop( get_the_excerpt(), true ); ?>

            <div class="middleBottom">
                <a class="excerptLink" href="<?php the_permalink(); ?>">Lisez plus&nbsp;&raquo;</a>
            </div>

            <?php } else { 

            echo get_the_excerpt(); ?>


        <?php } ?>
    </div>
</div>