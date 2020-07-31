<?php
/**
 * Template Newsletter
 *
 * @return string
 *
 * @var $atts
 * @var $form_id
 * @var $newsletter
 */
?>
<div class="inner">
    <?php if ( ! empty( $atts['title'] ) ) : ?>
        <h3 class="title"><?php echo wp_specialchars_decode( $atts['title'] ); ?></h3>
    <?php endif; ?>
    <?php if ( ! empty( $atts['desc'] ) ) : ?>
        <p class="desc"><?php echo wp_specialchars_decode( $atts['desc'] ); ?></p>
    <?php endif; ?>
    <div class="content">
        <?php ob_start(); ?>
        <label class="text-field field-email">
            <input class="input-text email-newsletter" type="email" name="EMAIL"
                   required="required"
                   placeholder="<?php echo esc_html( $atts['placeholder'] ); ?>">
            <span class="input-focus"></span>
        </label>
        <button type="submit" class="submit-newsletter" value=""></button>
        <?php
        $html = ob_get_clean();
        $newsletter->newsletter_form( $html, $form_id );
        ?>
    </div>
</div>