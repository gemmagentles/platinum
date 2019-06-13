<?php if ( have_rows( 'logo_tiles_block' ) ) : ?>
<div class="logo-tiles__wrapper">
    <?php while ( have_rows( 'logo_tiles_block' ) ) : the_row(); ?>
		<h2 class="logo-tiles__heading"><?php the_sub_field( 'heading' ); ?></h2>
		<div class="logo-tiles__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
		<?php if ( have_rows( 'tile' ) ) : ?>
        <div class="logo-tiles__grid">
			<?php while ( have_rows( 'tile' ) ) : the_row(); ?>
                <div class="logo-tiles__logo-wrapper">
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php $link = get_sub_field( 'logo_link' ); ?>
                    <?php if ( $logo ) { ?>
                        <?php if ( $link ) { ?><a href="<?php echo $link; ?>" target="_blank"><?php } ?>
                            <img class="logo-tiles__logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        <?php if ( $link ) { ?></a><?php } ?>
                    <?php } ?>
                </div>
			<?php endwhile; ?>
        </div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
    <?php endwhile; ?>
</div>
<?php endif; ?>
