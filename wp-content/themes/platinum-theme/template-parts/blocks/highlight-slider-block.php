<div class="highlight-slider__wrapper">
    <?php if ( have_rows( 'highlight_slides' ) ) : ?>
        <div class="highlight-slider__container">
            <?php while ( have_rows( 'highlight_slides' ) ) : the_row(); ?>
                <div>
                    <?php $slide_image = get_sub_field( 'slide_image' ); ?>
                    <?php if ( $slide_image ) { ?>
                        <img class="highlight-slider__image" src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
                    <?php } ?>
                    <div class="highlight-slider__caption">
                        <h3 class="highlight-slider__heading"><?php the_field( 'caption_heading' ); ?></h3>
                        <p><?php the_field( 'caption_paragraph' ); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
</div>
