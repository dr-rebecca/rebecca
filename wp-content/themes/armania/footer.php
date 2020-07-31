<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Armania
 * @since 1.0
 * @version 1.2
 */
?>
<?php
if (armania_get_option('enable_backtotop') == 1 && !armania_is_mobile()) {
    echo '<a href="#" class="backtotop action-to-top" title="'.esc_html__('Back to top', 'armania').'"></a>';
}
/* FOOTER */
do_action('ovic_footer_content');
/* NEWSLETTER */
armania_popup_newsletter();
?>
</div><!-- #page -->
<?php
/* WP FOOTER */
wp_footer();
?>
</body>
</html>
