        <footer class="footer" role="contentinfo">
				<div class="footer__top">
					<div class="footer__container">
						<div class="footer__container--left">
							<div class="footer__logo">
								<a href="<?php echo home_url(); ?>">
									<svg class="footer__logo-img"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-logo" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-logo"/></svg>
								</a>
							</div>
						</div>
						<div class="footer__container--right">
							<div class="footer__contact">
								<p class="footer__contact--phone"><?php the_field( 'contact_info_phone_number', 'option' ); ?></p>
								<a class="footer__contact--email" href="mailto:<?php the_field( 'contact_info_email', 'option' ); ?>" target="_top"><?php the_field( 'contact_info_email', 'option' ); ?></a>
							</div>
							<div class="footer__nav">
								<?php footer_nav(); ?>
							</div>
							<div class="footer__social">
								<a class="footer__social--link" title="Facebook" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
									<svg class="footer__social--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon"/></svg>
								</a>
								<a class="footer__social--link" title="Twitter" href="<?php the_field('twitter_url', 'option'); ?>" target="_blank">
									<svg class="footer__social--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter-icon"/></svg>
								</a>
								<a class="footer__social--link" title="Instagram" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
									<svg class="footer__social--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon"/></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__bottom">
					<div class="footer__container">
						<p class="footer__copyright">
							&copy; Copyright Platinum Companies, <?php echo date('Y'); ?>
						</p>
						<p class="footer__credit">
							Design by <a class="footer__credit--link" target="_blank" href="https://anotherblankpage.com/">Another Blank Page</a>
						</p>
					</div>
				</div>
			</footer>
		</div>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
