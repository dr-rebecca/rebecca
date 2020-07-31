<?php

use DgoraWcas\Helpers;
use DgoraWcas\Multilingual;

$name        = 's';
$value       = get_search_query();
$uniqueID    = substr(uniqid(), 10, 3);
$action      = esc_url(home_url('/'));
$placeholder = esc_html__('Search for products', 'armania');
if (class_exists('DGWT_WC_Ajax_Search')) {
    $value       = apply_filters('dgwt/wcas/search_bar/value', get_search_query(), DGWT_WCAS()->searchInstances);
    $uniqueID    = ++DGWT_WCAS()->searchInstances.substr(uniqid(), 10, 3);
    $placeholder = Helpers::getLabel('search_placeholder');
    $name        = Helpers::getSearchInputName();
    $action      = Helpers::searchFormAction();
}
if ($text != '') {
    $placeholder = $text;
}
?>
<div class="block-search sub-menu">
    <div class="dgwt-wcas-search-wrapp dgwt-wcas-has-submit js-dgwt-wcas-mobile-overlay-enabled"
         data-wcas-context="<?php echo substr(uniqid(), 8, 4); ?>">
        <form class="search-form dgwt-wcas-search-form" role="search" method="get"
              action="<?php echo esc_attr($action); ?>">

            <?php do_action('armania_before_search_form'); ?>

            <?php if ($category == 1) : ?>
                <div class="category">
                    <?php
                    $selected = '';
                    if (isset($_GET['product_cat']) && $_GET['product_cat']) {
                        $selected = $_GET['product_cat'];
                    }
                    $args = array(
                        'show_option_none'  => esc_html__('All Categories', 'armania'),
                        'taxonomy'          => 'product_cat',
                        'class'             => 'category-search-option',
                        'hide_empty'        => 1,
                        'orderby'           => 'name',
                        'order'             => "ASC",
                        'tab_index'         => true,
                        'hierarchical'      => true,
                        'id'                => rand(),
                        'name'              => 'product_cat',
                        'value_field'       => 'slug',
                        'selected'          => $selected,
                        'option_none_value' => '0',
                    );
                    wp_dropdown_categories($args);
                    ?>
                </div>
            <?php endif; ?>
            <div class="dgwt-wcas-sf-wrapp">
                <label class="screen-reader-text">
                    <?php esc_html_e('Products search', 'armania') ?>
                </label>
                <?php if (class_exists('WooCommerce')): ?>
                    <?php if (class_exists('DGWT_WC_Ajax_Search')) : ?>
                        <?php
                        /* Enqueue required scripts */
                        if (DGWT_WCAS()->settings->getOption('show_details_box') === 'on') {
                            wp_enqueue_script('woocommerce-general');
                        }
                        wp_enqueue_script('jquery-dgwt-wcas');
                        ?>
                        <input type="hidden" name="dgwt_wcas" value="1"/>
                        <?php if (Multilingual::isWPML()): ?>
                            <input type="hidden" name="lang" value="<?php echo Multilingual::getCurrentLanguage(); ?>"/>
                        <?php endif ?>
                    <?php endif; ?>
                    <input type="hidden" name="post_type" value="product"/>
                <?php endif; ?>
                <div class="search-input">
                    <input type="search"
                           class="input-text <?php echo esc_attr('dgwt-wcas-search-input'); ?>"
                           name="<?php echo esc_attr($name); ?>"
                           value="<?php echo esc_attr($value); ?>"
                           placeholder="<?php echo esc_attr($placeholder); ?>"
                           autocomplete="off">
                    <span class="input-focus"></span>
                    <div class="dgwt-wcas-preloader"></div>
                </div>
                <button type="submit" class="btn-submit dgwt-wcas-search-submit">
                    <?php echo esc_html__('Search', 'armania'); ?>
                </button>
            </div>

            <?php do_action('armania_after_search_form'); ?>
        </form>
    </div>
</div>
