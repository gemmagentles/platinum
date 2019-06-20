<?php if ( have_rows( 'accordion_block' ) ) : ?>
<div class="accordion__wrapper">
	<?php while ( have_rows( 'accordion_block' ) ) : the_row(); ?>
		<h2 data-aos="fade-up" class="accordion__heading"><?php the_sub_field( 'heading' ); ?></h2>
    <div data-aos="fade-up" class="accordion__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>

          <?php if ( have_rows( 'accordion' ) ) : ?>
            <?php while ( have_rows( 'accordion' ) ) : the_row(); ?>
              <div data-aos="fade-up" class="accordion__accordion">
                <!-- button to click on to open accordion -->
                <button class="accordion__accordion--btn accordion-js"><?php the_sub_field( 'accordion_heading' ); ?></button>
                <!-- content inside accordion -->
                <div class="accordion__accordion--content">
                  <div class="accordion__accordion--inner">
                    <?php the_sub_field( 'accordion_content' ); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <?php // no rows found ?>
          <?php endif; ?>

	<?php endwhile; ?>
</div>
<?php endif; ?>
