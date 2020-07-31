<?php

use Elementor\Embed;

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Bnbs"
 * @version 1.0.0
 */
class Shortcode_Ovic_Bnbs extends Ovic_Addon_Shortcode
{
	/**
	 * Shortcode name.
	 *
	 * @var  string
	 */
	public $shortcode = 'ovic_bnbs';

	public function content( $atts, $content = null )
	{
        $atts['link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['link']['url']);
		$link      = $this->add_link_attributes( $atts['link'], true );
		$css_class = $this->main_class( $atts,
			array(
				'ovic-banner-bestseller',
			)
		);
		ob_start();
		?>
        <div class="<?php echo esc_attr( $css_class ); ?>">
			<?php if ( ! empty( $atts['title'] ) ): ?>
                <h3 class="title">
					<?php echo esc_html( $atts['title'] ); ?>
                </h3>
			<?php endif; ?>
            <table class="content">
                <thead>
                    <tr class="text">
                        <?php if ( ! empty( $atts['title_01'] ) ): ?>
                            <th><?php echo esc_html( $atts['title_01'] ); ?></th>
                        <?php endif; ?>
                        <?php if ( ! empty( $atts['title_02'] ) ): ?>
                            <th><?php echo esc_html( $atts['title_02'] ); ?></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr class="desc">
                        <?php if ( ! empty( $atts['desc_01'] ) ): ?>
                            <td><?php echo wp_specialchars_decode( $atts['desc_01'] ); ?></td>
                        <?php endif; ?>
                        <?php if ( ! empty( $atts['desc_02'] ) ): ?>
                            <td><?php echo wp_specialchars_decode( $atts['desc_02'] ); ?></td>
                        <?php endif; ?>
                    </tr>
                    <tr class="attribute">
                        <?php if ( ! empty( $atts['attribute_01_1'] ) ): ?>
                            <td><?php echo esc_html( $atts['attribute_01_1'] ); ?></td>
                        <?php endif; ?>
                        <?php if ( ! empty( $atts['attribute_02_1'] ) ): ?>
                            <td><?php echo esc_html( $atts['attribute_02_1'] ); ?></td>
                        <?php endif; ?>
                    </tr>
                    <tr class="attribute">
                        <?php if ( ! empty( $atts['attribute_01_2'] ) ): ?>
                            <td><?php echo esc_html( $atts['attribute_01_2'] ); ?></td>
                        <?php endif; ?>
                        <?php if ( ! empty( $atts['attribute_02_2'] ) ): ?>
                            <td><?php echo esc_html( $atts['attribute_02_2'] ); ?></td>
                        <?php endif; ?>
                    </tr>
                </tbody>
            </table>
			<?php if ( ! empty( $atts['link_video'] ) ):
				$param = array(
					'type'       => 'video',
					'video_type' => 'youtube',
					'wmode'      => 'opaque',
					'url'        => Embed::get_embed_url( $atts['link_video'] ),
				);
				?>
                <div class="elementor-wrapper elementor-open-lightbox">
                    <div class="elementor-custom-embed-image-overlay" data-elementor-open-lightbox="yes"
                         data-elementor-lightbox="<?php echo esc_attr( json_encode( $param ) ); ?>">
						<?php if ( ! empty( $atts['poster'] ) ): ?>
							<?php echo wp_get_attachment_image( $atts['poster']['id'], 'full' ); ?>
						<?php endif; ?>
                        <div class="elementor-custom-embed-play" role="button">
                            <i class="eicon-play" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
			<?php endif; ?>
            <div class="options">
				<?php if ( ! empty( $atts['tabs'] ) ): ?>
                    <ul>
						<?php foreach ( $atts['tabs'] as $tab ): ?>
                            <li>
								<?php if ( ! empty( $tab['image']['id'] ) ): ?>
                                    <figure>
										<?php echo wp_get_attachment_image( $tab['image']['id'] ); ?>
                                    </figure>
								<?php endif; ?>
								<?php if ( ! empty( $tab['title'] ) ): ?>
                                    <p>
										<?php echo nl2br( $tab['title'] ); ?>
                                    </p>
								<?php endif; ?>
                            </li>
						<?php endforeach; ?>
                    </ul>
				<?php endif; ?>
				<?php if ( ! empty( $atts['text_button'] ) ) : ?>
                    <div class="button-wrap">
                        <a <?php echo esc_attr( $link ); ?> class="button">
							<?php echo esc_html( $atts['text_button'] ); ?>
                        </a>
                    </div>
				<?php endif; ?>
            </div>
        </div>
		<?php
		return ob_get_clean();
	}
}