<?php
$header_contact = armania_theme_option_meta( '_custom_metabox_theme_options', 'header_contact' );
?>
<?php if ( ! empty( $header_contact ) ) : ?>
	<?php
	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
		wpcf7_enqueue_scripts();
	}
	if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
		wpcf7_enqueue_styles();
	}
	$title     = get_the_title( $header_contact );
	$shortcode = '[contact-form-7 id="' . $header_contact . '"]';
	?>
    <div class="header-contact armania-dropdown">
        <a href="#" data-armania="armania-dropdown">
			<?php echo esc_html__( 'Make an Appointment', 'armania' ); ?>
        </a>
        <div class="sub-menu">
            <h3 class="title"><?php echo esc_html( $title ); ?></h3>
			<?php echo do_shortcode( $shortcode ); ?>
        </div>
    </div>
<?php endif; ?>