<?php if ( have_rows( 'content_overlay_panel_block' ) ) : ?>
	<?php while ( have_rows( 'content_overlay_panel_block' ) ) : the_row(); ?>
        <div class="content-overlay-panel__wrapper">
            <div class="content-overlay-panel__container">
            <?php $content_box = get_sub_field( 'heading' ); ?>
                <div class="content-overlay-panel__image-wrapper<?php if ( $content_box ) { ?> content-overlay-panel__image-with-text<?php } ?>">
                    <?php $background_image = get_sub_field( 'background_image' ); ?>
                    <?php if ( $background_image ) { ?>
                        <img class="content-overlay-panel__image" src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" />
                    <?php } ?>
                </div>
                <?php if ( $content_box ) { ?>
                    <div class="content-overlay-panel__text-wrapper">
                        <span data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="400" data-aos-duration="550" class="subtitle"><?php the_sub_field( 'subtitle' ); ?></span>
                        <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="600" data-aos-duration="550" class="content-overlay-panel__heading"><?php the_sub_field( 'heading' ); ?></h2>
                        <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="800" data-aos-duration="550" class="content-overlay-panel__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                        <?php $button_link = get_sub_field( 'button_link' ); ?>
                        <?php if ( $button_link ) { ?>
                            <button data-aos="fade" data-aos-easing="ease-in" data-aos-delay="500" data-aos-duration="550" class="platinum-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
