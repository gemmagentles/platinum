<?php if ( have_rows( 'tiles_block' ) ) : ?>
    <?php while ( have_rows( 'tiles_block' ) ) : the_row(); ?>
        <div class="tiles__wrapper">
            <h2 class="tiles__heading"><?php the_sub_field( 'heading' ); ?></h2>
            <?php if ( have_rows( 'tile' ) ) : ?>
                <div class="tiles__grid">
                    <?php while ( have_rows( 'tile' ) ) : the_row(); ?>
                        <div class="tiles__tile--background" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
                            <div class="tiles__tile--container">
                                <h3 class="tiles__tile--heading"><?php the_sub_field( 'heading' ); ?></h3>
                                <p class="tiles__tile--paragraph"><?php the_sub_field( 'paragraph' ); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>
	<?php endwhile; ?>
<?php endif; ?>
