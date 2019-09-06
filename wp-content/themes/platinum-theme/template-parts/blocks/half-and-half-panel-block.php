<?php if ( have_rows( 'half_and_half_panel_repeater' ) ) : ?>
<div class="half-and-half-panel">
	<?php while ( have_rows( 'half_and_half_panel_repeater' ) ) : the_row(); ?>
    <div class="half-and-half-panel__wrapper<?php if ( get_sub_field( 're-order' ) == 1 ) { ?> half-and-half-panel__order-left<?php } ?>">
            <div class="half-and-half-panel__text-wrapper">
                <span data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="50" data-aos-duration="550" class="subtitle"><?php the_sub_field( 'sub_title' ); ?></span>
                <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="250" data-aos-duration="550" class="half-and-half-panel__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="450" data-aos-duration="550" class="half-and-half-panel__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) { ?>
                    <button data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="500" data-aos-duration="550" class="platinum-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
                <?php } ?>
            </div>
            <div class="half-and-half-panel__image-wrapper">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php $image_orientation = get_sub_field( 'image_orientation' ); ?>
                <?php if ( $image ) { ?>
                    <img data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="650" data-aos-duration="550" class="half-and-half-panel__image<?php if ( $image_orientation == 'landscape') { ?> half-and-half-panel__image--landscape<?php } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php } ?>
            </div>
        </div>
	<?php endwhile; ?>
    </div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>