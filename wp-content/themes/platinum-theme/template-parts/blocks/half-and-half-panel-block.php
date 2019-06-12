<?php if ( have_rows( 'half_and_half_panel_repeater' ) ) : ?>
<div class="half-and-half-panel">
	<?php while ( have_rows( 'half_and_half_panel_repeater' ) ) : the_row(); ?>
    <div class="half-and-half-panel__wrapper<?php if ( get_sub_field( 're-order' ) == 1 ) { ?> half-and-half-panel__order-left<?php } ?>">
            <div class="half-and-half-panel__text-wrapper">
                <span class="subtitle"><?php the_sub_field( 'sub_title' ); ?></span>
                <h2 class="half-and-half-panel__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div class="half-and-half-panel__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) { ?>
                    <button class="platinum-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
                <?php } ?>
            </div>
            <div class="half-and-half-panel__image-wrapper">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) { ?>
                    <img class="half-and-half-panel__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php } ?>
            </div>
        </div>
	<?php endwhile; ?>
    </div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>