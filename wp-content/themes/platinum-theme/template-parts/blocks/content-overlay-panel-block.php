<?php if ( have_rows( 'content_overlay_panel_block' ) ) : ?>
	<?php while ( have_rows( 'content_overlay_panel_block' ) ) : the_row(); ?>
        <div class="content-overlay-panel__wrapper">
            <div class="content-overlay-panel__container">
                <div class="content-overlay-panel__image-wrapper">
                    <?php $background_image = get_sub_field( 'background_image' ); ?>
                    <?php if ( $background_image ) { ?>
                        <img data-aos="fade-left" data-aos-easing="ease-in" data-aos-duration="550" class="content-overlay-panel__image" src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" />
                    <?php } ?>
                </div>
                <div class="content-overlay-panel__text-wrapper">
                    <span class="subtitle"><?php the_sub_field( 'subtitle' ); ?></span>
                    <h2 class="content-overlay-panel__heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <div class="content-overlay-panel__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                    <?php $button_link = get_sub_field( 'button_link' ); ?>
                    <?php if ( $button_link ) { ?>
                        <button class="platinum-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
