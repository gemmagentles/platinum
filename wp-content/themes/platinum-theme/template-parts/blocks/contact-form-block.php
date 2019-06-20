<?php if ( have_rows( 'form_block' ) ) : ?>
    <div class="contact-form__wrapper">
        <?php while ( have_rows( 'form_block' ) ) : the_row(); ?>
            <h2 data-aos="fade-up" class="contact-form__heading"><?php the_sub_field( 'heading' ); ?></h2>
            <div data-aos="fade-up" class="contact-form__form-wrapper">
                <?php the_sub_field( 'form_shortcode' ); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
    