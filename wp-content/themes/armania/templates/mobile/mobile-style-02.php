<?php
/**
 * Name:  Mobile style 02
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
<div class="fixed armania-dropdown">
    <div class="inner">
        <a href="<?php echo esc_url($logo_link); ?>" class="home-page">
            <span class="icon main-icon-house"></span>
        </a>
        <a href="#" class="menu-bar menu-toggle">
            <span class="icon main-icon-menu-1"></span>
        </a>
        <?php if ($page_layout['layout'] != 'full' && $page_template == '') : ?>
            <a href="#" class="open-sidebar">
                <span class="icon main-icon-sidebar"></span>
            </a>
        <?php else: ?>
            <?php
            if (function_exists('armania_header_cart_link')) {
                armania_header_cart_link();
            } ?>
        <?php endif; ?>
        <a href="#" class="action-to-top">
            <span class="icon main-icon-arrow_left"></span>
        </a>
    </div>
    <a href="#" class="mobile-toggle" data-armania="armania-dropdown">
        <span class="icon main-icon-close"></span>
    </a>
</div>
