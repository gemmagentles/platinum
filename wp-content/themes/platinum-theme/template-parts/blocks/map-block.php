<?php if ( have_rows( 'map_block' ) ) : ?>
    <div class="map__wrapper">
        <div class="map__container">
            <?php while ( have_rows( 'map_block' ) ) : the_row(); ?>
                <div class="map__google-map">
                    <?php the_sub_field( 'map_shortcode' ); ?>
                </div>
                <div class="map__content-box">
                    <span data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="400" data-aos-duration="550" class="subtitle"><?php the_sub_field( 'subtitle' ); ?></span>
                    <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="600" data-aos-duration="550" class="map__heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="800" data-aos-duration="550" class="map__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
