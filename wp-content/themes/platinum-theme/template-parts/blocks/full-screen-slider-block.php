<div class="full-screen-slider__wrapper">
    <div class="full-screen-slider__content">
        <div class="full-screen-slider__content--inner">
            <h1>
                <?php $logo = get_field( 'logo' ); ?>
                <?php if ( $logo ) { ?>
                    <img class="full-screen-slider__logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <?php } ?>
            </h1>
            <div class="full-screen-slider__content--paragraph"><?php the_field( 'paragraph' ); ?></div>
        </div>
    </div>

    <?php if ( have_rows( 'slides' ) ) : ?>
        <div class="full-screen-slider">
            <?php while ( have_rows( 'slides' ) ) : the_row(); ?>
                <div class="full-screen-slider__image-wrapper"  style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_sub_field( 'image' ); ?>');">
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>

    <div class="full-screen-slider__progress-nav">
    <?php if ( have_rows( 'slides' ) ) : ?>
        <?php $count = 1; ?>
        <?php while ( have_rows( 'slides' ) ) : the_row(); ?>
        <div>0<?php echo $count; ?></div>
        <?php $count++; ?>
        <?php endwhile; ?>
    </div>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
    </div>
</div>
    