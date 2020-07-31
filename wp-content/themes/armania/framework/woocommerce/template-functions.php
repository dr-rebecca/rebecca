<?php
/***
 * Core Name: WooCommerce
 * Version: 1.0.0
 * Author: Khanh
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
/**
 *
 * WOOCOMMERCE CUSTOM SHOP CONTROL
 */
if (!function_exists('armania_loop_shop_per_page')) {
    function armania_loop_shop_per_page()
    {
        $products_perpage = armania_get_option('product_per_page', '12');

        return $products_perpage;
    }
}
if (!function_exists('armania_woof_products_query')) {
    function armania_woof_products_query($wr)
    {
        $products_perpage     = armania_get_option('product_per_page', '12');
        $wr['posts_per_page'] = $products_perpage;

        return $wr;
    }
}
if (!function_exists('armania_control_before_shop_loop')) {
    function armania_control_before_shop_loop()
    {
        $template     = 'default';
        $is_shortcode = wc_get_loop_prop('is_shortcode');
        if (!$is_shortcode) {
            wc_get_template("product-control/{$template}-before-control.php",
                array(
                    'template_type' => $template,
                )
            );
        }
    }
}
if (!function_exists('armania_control_after_shop_loop')) {
    function armania_control_after_shop_loop()
    {
        $template     = 'default';
        $is_shortcode = wc_get_loop_prop('is_shortcode');
        if (!$is_shortcode) {
            wc_get_template("product-control/{$template}-after-control.php",
                array(
                    'template_type' => $template,
                )
            );
        }
    }
}

if (!function_exists('armania_shop_display_mode')) {
    function armania_shop_display_mode()
    {
        global $wp;
        if ('' === get_option('permalink_structure')) {
            $form_action = remove_query_arg(array(
                'page',
                'paged',
                'product-page'
            ), add_query_arg($wp->query_string, '', home_url($wp->request)));
        } else {
            $form_action = preg_replace('%\/page/[0-9]+%', '', home_url(trailingslashit($wp->request)));
        }
        $limit      = armania_get_option('product_per_page', 20);
        $list_style = armania_get_option('shop_list_style', 'grid');
        if (!armania_is_mobile()): ?>
            <div class="display-mode-control mode-number">
                <span class="title"><?php echo esc_html__('Show:', 'armania'); ?></span>
                <form class="display-mode" method="get" action="<?php echo esc_attr($form_action); ?>">
                    <button type="submit" name="product_per_page" value="16"
                            class="grid-number<?php if ($limit == 16) : ?> active<?php endif; ?>">
                        16
                    </button>
                    <span>/</span>
                    <button type="submit" name="product_per_page" value="20"
                            class="grid-number<?php if ($limit == 20) : ?> active<?php endif; ?>">
                        20
                    </button>
                    <span>/</span>
                    <button type="submit" name="product_per_page" value="24"
                            class="grid-number<?php if ($limit == 24) : ?> active<?php endif; ?>">
                        24
                    </button>
                    <span>/</span>
                    <button type="submit" name="product_per_page" value="-1"
                            class="grid-number">
                        <?php echo esc_html__('All', 'armania'); ?>
                    </button>
                    <?php wc_query_string_form_fields(null, array(
                        'product_per_page',
                        'submit',
                        'paged',
                        'product-page'
                    )); ?>
                </form>
            </div>
        <?php endif; ?>
        <div class="display-mode-control">
            <form class="display-mode" method="get" action="<?php echo esc_attr($form_action); ?>">
                <button type="submit" value="list" name="shop_list_style"
                        class="mode-button mode-list <?php if ($list_style == 'list') {
                            echo ' active';
                        } ?>">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <button type="submit" value="grid" name="shop_list_style"
                        class="mode-button mode-grid <?php if ($list_style == 'grid') {
                            echo ' active';
                        } ?>">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <?php wc_query_string_form_fields(null, array(
                    'shop_list_style',
                    'submit',
                    'paged',
                    'product-page'
                )); ?>
            </form>
        </div>
        <?php
    }
}
if (!function_exists('armania_generate_carousel_products')) {
    function armania_generate_carousel_products($prefix)
    {
        $enable_product = armania_get_option($prefix.'_enable', 'enable');
        if ($enable_product == 'disable') {
            return array();
        }
        $style_product = armania_get_option($prefix.'_style', 'style-01');
        $title_product = armania_get_option($prefix.'_title', '');
        $desktop       = armania_get_option($prefix.'_desktop', 4);
        $laptop        = armania_get_option($prefix.'_laptop', 4);
        $tablet        = armania_get_option($prefix.'_tablet', 3);
        $mobile        = armania_get_option($prefix.'_mobile', 2);
        $margin        = array(30, 20, 10);
        if ($style_product == 'style-01') {
            $margin = array(0, 0, 0);
        }
        $data_slick = apply_filters('armania_generate_carousel_'.$prefix.'_products', array(
                'infinite'     => false,
                'slidesMargin' => $margin[0],
                'slidesToShow' => (int) $desktop,
                'responsive'   => array(
                    array(
                        'breakpoint' => 1200,
                        'settings'   => array(
                            'slidesToShow' => (int) $laptop,
                        ),
                    ),
                    array(
                        'breakpoint' => 992,
                        'settings'   => array(
                            'slidesToShow' => (int) $tablet,
                        ),
                    ),
                    array(
                        'breakpoint' => 768,
                        'settings'   => array(
                            'slidesMargin' => $margin[1],
                            'slidesToShow' => (int) $tablet,
                        ),
                    ),
                    array(
                        'breakpoint' => 480,
                        'settings'   => array(
                            'slidesMargin' => $margin[2],
                            'slidesToShow' => (int) $mobile,
                        ),
                    ),
                ),
            )
        );
        $generate   = ' data-slick='.json_encode($data_slick).' ';

        return array(
            'title'    => $title_product,
            'style'    => $style_product,
            'carousel' => $generate,
        );
    }
}
if (!function_exists('armania_woocommerce_setup_loop')) {
    function armania_woocommerce_setup_loop($args = array())
    {
        $is_shortcode  = wc_get_loop_prop('is_shortcode');
        $list_style    = armania_get_option('shop_list_style', 'grid');
        $product_style = armania_get_option('shop_product_style', 'style-01');
        $columns       = armania_get_option('product_loop_columns', 4);
        $short_title   = armania_get_option('enable_short_title');

        $classes = array();

        if ($list_style == 'list') {
            $columns = 1;
        }

        $default = array(
            'width'      => '',
            'height'     => '',
            'class'      => $classes,
            'title'      => $short_title,
            'style'      => $product_style,
            'list_style' => $list_style,
            'columns'    => $columns,
        );

        $args = wp_parse_args($args, $default);

        if ($is_shortcode == true || !class_exists('Ovic_Addon_Toolkit')) {
            unset($args['columns']);
            unset($args['list_style']);
        }

        foreach ($args as $key => $value) {
            wc_set_loop_prop($key, $value);
        }
    }
}
if (!function_exists('armania_custom_available_variation')) {
    function armania_custom_available_variation($data, $product, $variation)
    {
        $check = false;
        if (is_ajax() && !empty($_POST['custom_data'])) {
            $check = true;
            list($width, $height) = explode('x', $_POST['custom_data']);
        } elseif (!empty(wc_get_loop_prop('width')) && !empty(wc_get_loop_prop('height'))) {
            $check  = true;
            $width  = wc_get_loop_prop('width');
            $height = wc_get_loop_prop('height');
        }

        if ($check) {
            $image_variable             = armania_resize_image($data['image_id'], $width, $height, true, false);
            $data['image']['src']       = $image_variable['url'];
            $data['image']['url']       = $image_variable['url'];
            $data['image']['full_src']  = $image_variable['url'];
            $data['image']['thumb_src'] = $image_variable['url'];
            $data['image']['srcset']    = $image_variable['url'];
            $data['image']['src_w']     = $width;
            $data['image']['src_h']     = $height;
        }

        return $data;
    }

    add_filter('woocommerce_available_variation', 'armania_custom_available_variation', 10, 3);
}
if (!function_exists('armania_get_size_image')) {
    function armania_get_size_image()
    {
        // GET SIZE IMAGE SETTING
        $width  = 300;
        $height = 300;
        $size   = wc_get_image_size('shop_catalog');
        if ($size) {
            $width  = $size['width'];
            $height = $size['height'];
        }
        $width  = wc_get_loop_prop('width') ? wc_get_loop_prop('width') : $width;
        $height = wc_get_loop_prop('height') ? wc_get_loop_prop('height') : $height;

        return apply_filters('armania_get_size_image_product',
            array(
                'width'  => $width,
                'height' => $height,
            )
        );
    }
}
/**
 *
 * PRODUCT THUMBNAIL
 */
if (!function_exists('armania_template_loop_product_thumbnail')) {
    function armania_template_loop_product_thumbnail()
    {
        global $product;

        $image_second       = '';
        $size_image         = armania_get_size_image();
        $crop               = true;
        $lazy_load          = true;
        $thumbnail_id       = $product->get_image_id();
        $gallery_ids        = $product->get_gallery_image_ids();
        $default_attributes = $product->get_default_attributes();
        $product_hover      = armania_get_option('product_hover', 'zoom');
        $link               = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
        if (!empty($default_attributes)) {
            $lazy_load = false;
        }
        $class       = '';
        $class_thumb = array(
            'thumb-link',
            'hover-'.$product_hover,
            'woocommerce-product-gallery__image',
        );
        if (!armania_is_mobile() && $product_hover == 'change' && !empty($gallery_ids[0])) {
            $second_thumb = armania_resize_image($gallery_ids[0], $size_image['width'], $size_image['height'], $crop, $lazy_load, true, 'wp-post-image');
            $image_second = '<figure class="second-thumb">'.$second_thumb['img'].'</figure>';
        } else {
            $class = 'wp-post-image';
        }
        $primary_thumb = armania_resize_image($thumbnail_id, $size_image['width'], $size_image['height'], $crop, $lazy_load, true, $class);
        $image_thumb   = '<figure class="primary-thumb">'.$primary_thumb['img'].'</figure>';
        ?>
        <div class="thumb-wrapper">
            <a class="<?php echo esc_attr(implode(' ', $class_thumb)); ?>"
               href="<?php echo esc_url($link); ?>">
                <?php echo wp_specialchars_decode($image_thumb.$image_second); ?>
            </a>
        </div>
        <?php
    }
}
if (!function_exists('armania_header_cart_link')) {
    function armania_header_cart_link()
    {
        ?>
        <a class="woo-cart-link icon-link" href="<?php echo wc_get_cart_url(); ?>" data-armania="armania-dropdown">
            <span class="icon">
                <span class="main-icon-cart"></span>
                <span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </span>
            <span class="content">
                <span class="text"><?php echo sprintf(esc_html__('Your %s Cart', 'armania'), '<br>'); ?></span>
                <span class="count-text"><?php echo WC()->cart->get_cart_contents_count().esc_html__(' Item(s)', 'armania'); ?></span>
                <span class="total"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
            </span>
        </a>
        <?php
    }
}
if (!function_exists('armania_header_mini_cart')) {
    function armania_header_mini_cart()
    {
        ?>
        <div class="block-minicart armania-dropdown">
            <?php
            armania_header_cart_link();
            the_widget('WC_Widget_Cart', 'title=');
            ?>
        </div>
        <?php
    }
}
if (!function_exists('armania_cart_link_fragment')) {
    function armania_cart_link_fragment($fragments)
    {
        ob_start();
        armania_header_cart_link();
        $fragments['a.woo-cart-link'] = ob_get_clean();

        return $fragments;
    }
}
if (!function_exists('armania_template_loop_product_title')) {
    function armania_template_loop_product_title()
    {
        global $product;

        $link  = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
        $class = apply_filters('woocommerce_product_loop_title_classes', 'product-title');

        echo '<h2 class="'.esc_attr($class).'"><a href="'.esc_url($link).'">'.get_the_title().'</a></h2>';
    }
}
if (!function_exists('armania_function_shop_loop_item_countdown')) {
    function armania_function_shop_loop_item_countdown($style = 'style-01')
    {
        global $product;

        $date = armania_get_max_date_sale($product);
        if ($product->is_on_sale()) {
            $date = apply_filters('ovic_change_datetime_countdown', $date, $product->get_id());
        }
        if ($date > 0) {
            $params = array(
                'days_text' => esc_html__('Days', 'armania'),
                'hrs_text'  => esc_html__('Hrs', 'armania'),
                'mins_text' => esc_html__('Mins', 'armania'),
                'secs_text' => esc_html__('Secs', 'armania'),
            );
            if ($style == 'style-02') {
                unset($params['days_text']);
            }
            if ($style == 'style-03') {
                $params = array(
                    'days_text' => esc_html__('Days', 'armania'),
                    'hrs_text'  => esc_html__('Hours', 'armania'),
                    'mins_text' => esc_html__('Minutes', 'armania'),
                    'secs_text' => esc_html__('Seconds', 'armania'),
                );
            }
            wp_enqueue_script('armania-countdown');
            ?>
            <div class="armania-countdown-wrapper">
                <?php if ($style == 'style-02'): ?>
                    <span class="title">
                        <?php echo esc_html__('Hurry Up! Offers end in:', 'armania'); ?>
                    </span>
                <?php endif; ?>
                <div class="armania-countdown"
                     data-datetime="<?php echo date('m/j/Y g:i:s', $date); ?>"
                     data-params="<?php echo esc_attr(wp_json_encode($params)) ?>">
                </div>
            </div>
            <?php
        }
    }
}
if (!function_exists('armania_get_max_date_sale')) {
    function armania_get_max_date_sale($product)
    {
        $variation_dates     = array();
        $sale_price_dates_to = false;
        $date_now            = current_time('timestamp', 0);
        // Loop through variations
        foreach ($product->get_children() as $key => $variation_id) {
            $variation      = wc_get_product($variation_id);
            $sales_price_to = $variation->get_date_on_sale_to();

            if (!empty($sales_price_to)) {
                $variation_dates[] = $sales_price_to->getTimestamp();
            }
        }
        if (!empty($variation_dates)) {
            return max($variation_dates);
        }
        if (!$sale_price_dates_to) {
            $sale_price_dates_to   = get_post_meta($product->get_id(), '_sale_price_dates_to', true);
            $sale_price_dates_from = get_post_meta($product->get_id(), '_sale_price_dates_from', true);
            if ($sale_price_dates_to == '' || $date_now < $sale_price_dates_from) {
                $sale_price_dates_to = '0';
            }
        }

        return $sale_price_dates_to;
    }
}
if (!function_exists('armania_sale_percent')) {
    function armania_sale_percent()
    {
        global $product;

        $percent = '';
        if ($product->get_type() == 'variable') {
            $available_variations = $product->get_variation_prices();
            $max_percent          = 0;
            if (!empty($available_variations['regular_price'])) {
                foreach ($available_variations['regular_price'] as $key => $regular_price) {
                    $sale_price = $available_variations['sale_price'][$key];
                    if ($sale_price < $regular_price) {
                        $percent = round((($regular_price - $sale_price) / $regular_price) * 100);
                        if ($percent > $max_percent) {
                            $max_percent = $percent;
                        }
                    }
                }
            }
            $percent = $max_percent;
        } elseif (($product->get_type() == 'simple' || $product->get_type() == 'external')) {
            $percent = round((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100);
        }

        return $percent;
    }
}
if (!function_exists('armania_flash_sale_percent')) {
    function armania_flash_sale_percent($style = 'style-01')
    {
        global $product;

        if ($product->is_on_sale()) {
            $percent = armania_sale_percent();
            ?>
            <div class="product-sale-off">
                <?php if ($style == 'style-01'): ?>
                    <span class="text"><?php echo esc_html__('SALE', 'armania'); ?></span>
                    <span class="percent">
                        <?php echo sprintf('%s %s',
                            $percent,
                            esc_html__('% OFF', 'armania')
                        ); ?>
                    </span>
                <?php else: ?>
                    <span class="text"><?php echo esc_html__('Sale Off', 'armania'); ?></span>
                    <span class="percent">
                        <?php echo '-'.esc_html($percent).'%'; ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php
        }
    }
}
if (!function_exists('armania_get_star_rating_html')) {
    function armania_get_star_rating_html($html, $rating, $count)
    {
        global $product;

        if (method_exists($product, 'get_review_count')) {
            $review_count = $product->get_review_count();
            $review_count = zeroise($review_count, 2);

            $html .= '<strong class="rating">('.$review_count.')</strong>';

            if ($review_count > 0) {
                return '<div class="star-rating-wrap">'.$html.'</div>';
            }
        }

        return '';
    }
}

if (!function_exists('armania_sale_process_availability')) {
    function armania_sale_process_availability()
    {
        global $product;

        $units_sold   = get_post_meta($product->get_id(), 'total_sales', true);
        $availability = $product->get_stock_quantity();
        if ($availability) {
            $total_percent = $availability + $units_sold;
            $percent       = 100 - round((($units_sold / $total_percent) * 100), 0);
        } else {
            $percent = 0;
        }
        ?>
        <div class="process-availability">
            <div class="availability-text">
                    <span class="text available">
					<?php
                    $stock = esc_html__('Unlimit', 'armania');
                    if (!empty($availability) && $availability > 0) {
                        $stock = $availability;
                    }
                    echo sprintf('%s <strong>%s</strong>', esc_html__('Available:', 'armania'), $stock);
                    ?>
					</span>
                <span class="text sold">
                    <?php echo sprintf('%s <strong>%s</strong>', esc_html__('Sold:', 'armania'), $units_sold); ?>
                </span>
            </div>
            <div class="availability-total total">
                <span class="process" style="width: <?php echo esc_attr($percent).'%' ?>"></span>
            </div>
        </div>
        <?php
    }
}
/**
 *
 * PRODUCT LOOP GALLERY
 */
if (!function_exists('armania_template_loop_gallery')) {
    function armania_template_loop_gallery()
    {
        global $product;

        $index          = 0;
        $data_slick     = array(
            'slidesToShow' => 3,
            'slidesMargin' => 10,
            'infinite'     => false,
            'responsive'   => array(
                array(
                    'breakpoint' => 768,
                    'settings'   => array(
                        'slidesToShow' => 2,
                    ),
                ),
            ),
        );
        $size_image     = armania_get_size_image();
        $attachment_ids = $product->get_gallery_image_ids();
        $primary_full   = armania_resize_image($product->get_image_id(), $size_image['width'], $size_image['height'], true, true);
        $primary_thumb  = armania_resize_image($product->get_image_id(), 36, 36, true, true);
        if (!armania_is_mobile() && !empty($attachment_ids)) : ?>
            <div class="product-loop-gallery">
                <div class="owl-slick"
                     data-slick="<?php echo esc_attr(json_encode($data_slick)); ?>">
                    <a href="#" data-image="<?php echo esc_url($primary_full['url']); ?>"
                       data-index="<?php echo esc_attr($index); ?>" class="gallery-active">
                        <?php echo wp_specialchars_decode($primary_thumb['img']); ?>
                    </a>
                    <?php foreach ($attachment_ids as $attachment_id) : ?>
                        <?php
                        $index++;
                        $gallery_full  = armania_resize_image($attachment_id, $size_image['width'], $size_image['height'], true, true);
                        $gallery_thumb = armania_resize_image($attachment_id, 36, 36, true, true);
                        ?>
                        <a href="#" data-image="<?php echo esc_url($gallery_full['url']); ?>"
                           data-index="<?php echo esc_attr($index); ?>">
                            <?php echo wp_specialchars_decode($gallery_thumb['img']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif;
    }
}

if (!function_exists('armania_get_custom_attributes')) {
    function armania_get_custom_attributes()
    {
        global $product;

        $product_attributes = array();
        // Add product attributes to list.
        $attributes = array_filter($product->get_attributes(), 'wc_attributes_array_filter_visible');

        foreach ($attributes as $attribute) {
            if (!$attribute->is_taxonomy()) {
                $values = $attribute->get_options();

                foreach ($values as &$value) {
                    $value = make_clickable(esc_html($value));
                }

                $product_attributes['attribute_'.sanitize_title_with_dashes($attribute->get_name())] = array(
                    'label' => wc_attribute_label($attribute->get_name()),
                    'value' => apply_filters('woocommerce_attribute', wpautop(wptexturize(implode(', ', $values))), $attribute, $values),
                );
            }
        }

        /**
         * Hook: woocommerce_display_product_attributes.
         *
         * @param  array  $product_attributes  Array of atributes to display; label, value.
         * @param  WC_Product  $product  Showing attributes for this product.
         *
         * @since 3.6.0.
         */
        $product_attributes = apply_filters('woocommerce_display_product_attributes', $product_attributes, $product);

        if (!empty($product_attributes)) : ?>
            <div class="shop_attributes-wrap">
                <?php
                wc_get_template(
                    'single-product/product-attributes.php',
                    array(
                        'product_attributes' => $product_attributes,
                        // Legacy params.
                        'product'            => $product,
                        'attributes'         => $attributes,
                        'display_dimensions' => false,
                    )
                );
                ?>
            </div>
        <?php endif;
    }
}

/**
 *
 * PRODUCT ITEM LOOP VARIABLE
 */
if (!function_exists('armania_template_loop_variable')) {
    function armania_template_loop_variable()
    {
        global $product;

        if ($product->get_type() == 'variable') : ?>
            <?php
            $attributes = $product->get_variation_attributes();
            $size_image = armania_get_size_image();
            if (!empty($attributes)):?>
                <form class="variations_form cart" method="post" enctype='multipart/form-data'
                      data-product_id="<?php echo absint($product->get_id()); ?>"
                      data-product_variations="false"
                      data-price="<?php echo esc_attr($product->get_price_html()); ?>"
                      data-custom_data="<?php echo absint($size_image['width']); ?>x<?php echo absint($size_image['height']); ?>">
                    <table class="variations">
                        <tbody>
                        <?php
                        foreach ($attributes as $attribute_name => $options) : ?>
                            <tr>
                                <td class="value">
                                    <?php
                                    $selected = isset($_REQUEST['attribute_'.sanitize_title($attribute_name)]) ? wc_clean(stripslashes(urldecode($_REQUEST['attribute_'.sanitize_title($attribute_name)]))) : $product->get_variation_default_attribute($attribute_name);
                                    wc_dropdown_variation_attribute_options(
                                        array(
                                            'options'   => $options,
                                            'attribute' => $attribute_name,
                                            'product'   => $product,
                                            'selected'  => $selected,
                                        )
                                    );
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php woocommerce_template_loop_price(); ?>
                    <div class="single_variation_wrap">
                        <div class="woocommerce-variation-add-to-cart variations_button">
                            <button type="submit" class="single_add_to_cart_button button alt">
                                <?php echo esc_html($product->single_add_to_cart_text()); ?>
                            </button>
                            <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>"/>
                            <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>"/>
                            <input type="hidden" name="variation_id" class="variation_id" value="0"/>
                        </div>
                    </div>
                </form>
            <?php
            endif;
        endif;
    }
}
/**
 *
 * WOOCOMMERCE OPTIONS FLEXSLIDER
 */
if (!function_exists('armania_more_product_thumbnails')) {
    function armania_more_product_thumbnails()
    {
        global $product;

        $main_image    = false;
        $attachment_id = armania_theme_option_meta('_custom_metabox_product_options', null, 'poster');
        $video_url     = armania_theme_option_meta('_custom_metabox_product_options', null, 'video');
        $galleries     = armania_theme_option_meta('_custom_metabox_product_options', null, 'gallery');

        $attachment_id     = !empty($attachment_id) ? $attachment_id : $product->get_image_id();
        $flexslider        = (bool) apply_filters('woocommerce_single_product_flexslider_enabled', get_theme_support('wc-product-gallery-slider'));
        $gallery_thumbnail = wc_get_image_size('gallery_thumbnail');
        $thumbnail_size    = apply_filters('woocommerce_gallery_thumbnail_size', array(
            $gallery_thumbnail['width'], $gallery_thumbnail['height']
        ));
        $image_size        = apply_filters('woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size);
        $full_size         = apply_filters('woocommerce_gallery_full_size', apply_filters('woocommerce_product_thumbnails_large_size', 'full'));
        $image_src         = wp_get_attachment_image_src($attachment_id, $image_size);
        $full_src          = wp_get_attachment_image_src($attachment_id, $full_size);
        $alt_text          = trim(wp_strip_all_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)));
        $image             = wp_get_attachment_image(
            $attachment_id,
            $image_size,
            false,
            apply_filters(
                'woocommerce_gallery_image_html_attachment_image_params',
                array(
                    'title'                   => _wp_specialchars(get_post_field('post_title', $attachment_id),
                        ENT_QUOTES, 'UTF-8', true),
                    'data-caption'            => _wp_specialchars(get_post_field('post_excerpt', $attachment_id),
                        ENT_QUOTES, 'UTF-8', true),
                    'data-src'                => esc_url($full_src[0]),
                    'data-large_image'        => esc_url($full_src[0]),
                    'data-large_image_width'  => esc_attr($full_src[1]),
                    'data-large_image_height' => esc_attr($full_src[2]),
                    'class'                   => esc_attr($main_image ? 'wp-post-image' : ''),
                ),
                $attachment_id,
                $image_size,
                $main_image
            )
        );
        // VIDEO
        if (!empty($video_url)) {
            $thumbnail_src = get_theme_file_uri('assets/images/video.png');

            $html = wp_video_shortcode(array(
                'src'     => $video_url,
                'poster'  => $image_src[0],
                'width'   => $image_src[1],
                'height'  => $image_src[2],
                'preload' => 'auto',
            ));

            echo '<div data-thumb="'.esc_url($thumbnail_src).'" data-thumb-alt="'.esc_attr($alt_text).'" class="woocommerce-product-gallery__image none-zoom"><a href="'.esc_url($full_src[0]).'">'.$image.'</a>'.$html.'</div>';
        }
        // 360 DEGREE
        if (!empty($galleries)) {
            $thumbnail_src = get_theme_file_uri('assets/images/360degree.png');
            $gallery       = explode(',', $galleries);
            if (!empty($gallery[0])) {
                $full_src = wp_get_attachment_image_src($gallery[0], $full_size);
                $alt_text = trim(wp_strip_all_tags(get_post_meta($gallery[0], '_wp_attachment_image_alt', true)));
                $image    = wp_get_attachment_image(
                    $gallery[0],
                    $image_size,
                    false,
                    apply_filters(
                        'woocommerce_gallery_image_html_attachment_image_params',
                        array(
                            'title'                   => _wp_specialchars(get_post_field('post_title', $gallery[0]),
                                ENT_QUOTES, 'UTF-8', true),
                            'data-caption'            => _wp_specialchars(get_post_field('post_excerpt',
                                $gallery[0]),
                                ENT_QUOTES, 'UTF-8', true),
                            'data-src'                => esc_url($full_src[0]),
                            'data-large_image'        => esc_url($full_src[0]),
                            'data-large_image_width'  => esc_attr($full_src[1]),
                            'data-large_image_height' => esc_attr($full_src[2]),
                            'class'                   => esc_attr($main_image ? 'wp-post-image' : ''),
                        ),
                        $gallery[0],
                        $image_size,
                        $main_image
                    )
                );
            }

            $html = armania_do_shortcode('ovic_360degree', array(
                'ovic_vc_custom_id' => uniqid('ovic_vc_custom_'),
                'gallery_degree'    => $galleries,
                'width'             => $image_src[1],
                'height'            => $image_src[2],
            ));
            echo '<div data-thumb="'.esc_url($thumbnail_src).'" data-thumb-alt="'.esc_attr($alt_text).'" class="woocommerce-product-gallery__image none-zoom"><a href="'.esc_url($full_src[0]).'">'.$image.'</a>'.$html.'</div>';
        }
    }
}
if (!function_exists('armania_button_buy_now')) {
    function armania_button_buy_now()
    {
        echo '<a href="#" class="product-buy-now button">'.esc_html__('Buy Now', 'armania').'</a>';
        echo '<input type="hidden" name="buy-now-redirect" value="0">';
    }
}
if (!function_exists('armania_product_query')) {
    function armania_product_query($my_query)
    {
        if (is_shop() || is_product_taxonomy()) {
            $orderby_value = isset($_GET['orderby']) ? wc_clean((string) wp_unslash($_GET['orderby'])) : wc_clean(get_query_var('orderby')); // WPCS: sanitization ok, input var ok, CSRF ok.
            switch ($orderby_value) {
                case 'sale':
                    $my_query->set('meta_key', 'total_sales');
                    $my_query->set('orderby', 'meta_value_num');

                    break;

                case 'on-sale':
                    $product_ids_on_sale   = wc_get_product_ids_on_sale();
                    $product_ids_on_sale[] = 0;
                    $my_query->set('post__in', $product_ids_on_sale);
                    $my_query->set('orderby', 'post__in');

                    break;

                case 'feature':
                    $product_visibility_term_ids = wc_get_product_visibility_term_ids();
                    $my_query->set('tax_query', array(
                            array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'term_taxonomy_id',
                                'terms'    => $product_visibility_term_ids['featured'],
                            ),
                        )
                    );
                    $my_query->set('order', 'desc');

                    break;
            };
        }
    }
}