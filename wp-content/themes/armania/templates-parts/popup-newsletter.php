<?php
/**
 * Template Popup Newsletter
 *
 * @return string
 */
?>
<?php
$background  = armania_get_option( 'popup_bg' );
$title       = armania_get_option( 'popup_title' );
$desc        = armania_get_option( 'popup_desc' );
$placeholder = armania_get_option( 'input_placeholder' );
$button      = armania_get_option( 'popup_button' );
$delay       = armania_get_option( 'popup_delay' );
$effect      = armania_get_option( 'popup_effect' );
?>
<div id="armania-popup-newsletter"
     class="armania-popup-newsletter white-popup mfp-with-anim mfp-hide"
     data-effect="<?php echo esc_attr( $effect ); ?>"
     data-delay="<?php echo esc_attr( $delay ); ?>">
    <div class="popup-inner">
		<?php if ( $background ): ?>
            <div class="popup-thumb">
				<?php echo wp_get_attachment_image( $background, 'full' ); ?>
            </div>
		<?php endif; ?>
        <div class="popup-content">
			<?php if ( $title ) : ?>
                <h2 class="title"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>
			<?php if ( $desc ) : ?>
                <p class="desc"><?php echo esc_html( $desc ); ?></p>
			<?php endif; ?>
			<?php echo armania_do_shortcode( 'ovic_newsletter',
				array(
					'title'       => '',
					'subtitle'    => '',
					'desc'        => '',
					'style'       => 'style-01',
					'placeholder' => $placeholder,
					'button_text' => $button,
				)
			); ?>
            <label for="armania_disabled_popup_by_user" class="armania_disabled_popup_by_user">
                <input id="armania_disabled_popup_by_user" name="armania_disabled_popup_by_user" type="checkbox">
                <span><?php echo esc_html__( 'PREVENT THIS POP-UP', 'armania' ); ?></span>
            </label>
        </div>
    </div>
</div>