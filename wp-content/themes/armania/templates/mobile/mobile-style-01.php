<?php
/**
 * Name:  Mobile style 01
 **/
?>
<div class="main">
    <div class="inner">
        <?php armania_get_logo(); ?>
        <div class="control">
            <?php if (function_exists('armania_header_cart_link')) {
                armania_header_cart_link();
            } ?>
            <a class="woo-user-link" href="<?php echo esc_url($account_link); ?>">
                <span class="icon main-icon-user"></span>
            </a>
        </div>
    </div>
    <?php armania_header_search(); ?>
</div>
<div class="fixed">
    <div class="inner">
        <a href="<?php echo esc_url($logo_link); ?>" class="home-page">
            <span class="icon main-icon-house"></span>
            <span class="text"><?php echo esc_html__('Home', 'armania'); ?></span>
        </a>
        <a href="#" class="menu-bar menu-toggle">
            <span class="icon main-icon-menu-1"></span>
            <span class="text"><?php echo esc_html__('Menu', 'armania'); ?></span>
        </a>
        <?php if ($page_layout['layout'] != 'full' && $page_template == '') : ?>
            <a href="#" class="open-sidebar">
                <span class="icon main-icon-sidebar"></span>
                <span class="text"><?php echo esc_html__('Sidebar', 'armania'); ?></span>
            </a>
        <?php else: ?>
            <?php
            if (function_exists('armania_header_cart_link')) {
                armania_header_cart_link();
            } ?>
        <?php endif; ?>
        <?php if (function_exists('is_product') && is_product()) : ?>
            <a href="#" class="menu-add-cart">
                <span class="icon main-icon-cart"></span>
                <span class="text"><?php echo esc_html__('Buy Product', 'armania'); ?></span>
            </a>
        <?php else: ?>
            <a href="#" class="action-to-top">
                <span class="icon main-icon-left-arrow-2"></span>
                <span class="text"><?php echo esc_html__('Top', 'armania'); ?></span>
            </a>
        <?php endif; ?>
    </div>
</div>
