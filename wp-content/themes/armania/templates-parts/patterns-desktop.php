<?php
$css = '
    .header.style-01 .header-info,
    .header.style-03 .header-info,
    .header.style-05 .header-info .icon,
    .header.style-06 .header-info .icon,
    .header.style-06 .header-info .title,
    .header.style-08 .header-info .icon,
    .header.style-08 .header-info .title,
    .header.style-08 .header-submenu > .menu-item:not(.current-menu-ancestor):not(.current_page_ancestor):not(.current-menu-parent):not(.current-menu-item):not(.current_page_item):not(:hover) > a,
    .header.style-08 .block-userlink > a:not(:hover),
    .header.style-07 .block-userlink > a:not(:hover),
    .header.style-10 .header-info .title,
    .header.style-14 .header-submenu > .menu-item:not(.current-menu-ancestor):not(.current_page_ancestor):not(.current-menu-parent):not(.current-menu-item):not(.current_page_item):not(:hover) > a,
    .header.style-14 .header-social a:not(:hover),
    .header.style-14 .header-info .icon,
    .header.style-11 .header-info .icon,
    .header.style-07 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
    .header.style-05_2 .header-control .inner-control .block-wishlist > a:not(:hover) .count-text,
    .header.style-05_2 .header-control .inner-control .block-minicart > a:not(:hover) .total,
    .header.style-17_1 .header-info .icon,
    .header.style-17_1 .header-info .title,
    .header.style-20 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
    .header.style-19 .header-message,
    .header.style-19 .header-social a:not(:hover),
    .header.style-19 .header-submenu > .menu-item:not(.current-menu-ancestor):not(.current_page_ancestor):not(.current-menu-parent):not(.current-menu-item):not(.current_page_item):not(:hover) > a,
    .header.style-12_3 .header-bot .header-submenu > .menu-item:not(.current-menu-ancestor):not(.current_page_ancestor):not(.current-menu-parent):not(.current-menu-item):not(.current_page_item):not(:hover) > a,
    .header.style-19 .block-search > a:not(:hover),
    .header.style-12_2 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit
    {
        color: '.$main_color.';
        fill: '.$main_color.';
    }
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a,
    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > a,
    .header.style-08_2 .box-header-nav .main-menu > .menu-item > a,
    .header.style-08_2 .header-control .inner-control > * > a
    {
        color: '.$main_color.' !important;
        fill: '.$main_color.' !important;
    }
    .header.style-03 .box-nav-vertical .block-content,
    .header.style-03 ~ .header-sticky .box-nav-vertical .block-content,
    .header.style-01 .box-nav-vertical .block-content,
    .header.style-08_2 .header-control .inner-control > * > a .count,
    .header.style-08_2 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit
    {
        background-color: '.$main_color.';
    }
    .header.style-08_2 div.dgwt-wcas-search-wrapp .dgwt-wcas-sf-wrapp .input-focus
    {
        border-color: '.$main_color.' !important;
    }
    
    .header.style-02 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-02 .header-control .inner-control > * > a .count,
    .header.style-02 .header-control .inner-control > .block-userlink > a .icon,
    .header.style-02 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
    .header.style-05 .header-info .title,
    .header.style-14 .header-info .title,
    .header.style-11 .header-info .title,
    .header.style-07 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit:hover,
    .header.style-15 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit:hover,
    .header.style-20 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit:hover,
    .header.style-12_2 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit:hover,
    .header.style-17 .header-message
    {
        color: '.$main_color_2.';
        fill: '.$main_color_2.';
    }
    .header.style-03 .box-nav-vertical .block-title,
    .header.style-03 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-01 .header-bot,
    .header.style-02 ~ .header-sticky,
    .header.style-02 .header-mid,
    .header.style-05 .header-logo,
    .header.style-05 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-05 .header-control .inner-control > * > a .count,
    .header.style-05_2 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-05_2 .header-control .inner-control > * > a .count,
    .header.style-06 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-06 .header-control .inner-control > * > a .count,
    .header.style-07 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-07 .header-control .inner-control > * > a .count,
    .header.style-07_2 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-07_2 .header-control .inner-control > * > a .count,
    .header.style-08 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-08 .header-control .inner-control > * > a .count,
    .header.style-08_3 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-08_3 .header-control .inner-control > * > a .count,
    .header.style-09 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-09 .header-control .inner-control > * > a .count,
    .header.style-12 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-12 .header-control .inner-control > * > a .count,
    .header.style-12_2 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-12_2 .header-control .inner-control > * > a .count,
    .header.style-12_3 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-12_3 .header-control .inner-control > * > a .count,
    .header.style-15 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-15 .header-control .inner-control > * > a .count,
    .header.style-16 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-16 .header-control .inner-control > * > a .count,
    .header.style-17 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-17 .header-control .inner-control > * > a .count,
    .header.style-20 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-20 .header-control .inner-control > * > a .count,
    .header.style-10 ~ .header-sticky,
    .header.style-10 .header-bot,
    .header.style-11 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-11 .header-control .inner-control > * > a .count,
    .header.style-11 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-11 .box-nav-vertical .block-title,
    .header.style-11 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a::before,
    .header.style-11 .box-nav-vertical .vertical-menu > .menu-item > a::before,
    .header.style-14 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-14 .header-control .inner-control > * > a .count,
    .header.style-14 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-14 .box-nav-vertical .block-title,
    .header.style-14 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a::before,
    .header.style-14 .box-nav-vertical .vertical-menu > .menu-item > a::before,
    .header.style-07 .header-top,
    .header.style-12 .header-top,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-05_2 .box-nav-vertical .block-title,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a::before,
    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > a::before,
    .header.style-16_3 .header-top,
    .header.style-12_3 .header-bot .header-submenu > .current-menu-ancestor > a,
    .header.style-12_3 .header-bot .header-submenu > .current_page_ancestor > a,
    .header.style-12_3 .header-bot .header-submenu > .current-menu-parent > a,
    .header.style-12_3 .header-bot .header-submenu > .current-menu-item > a,
    .header.style-12_3 .header-bot .header-submenu > .current_page_item > a,
    .header.style-12_3 .header-bot .header-submenu > li:hover > a
    {
        background-color: '.$main_color_2.';
    }
    .header.style-11 ~ .header-sticky .box-nav-vertical .block-content,
    .header.style-11 .box-nav-vertical .block-content,
    .header.style-11 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > .megamenu,
    .header.style-11 .box-nav-vertical .vertical-menu > .menu-item > .megamenu,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .block-content,
    .header.style-05_2 .box-nav-vertical .block-content,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > .sub-menu,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > .sub-menu:not(.megamenu) .menu-item > .sub-menu,
    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > .sub-menu,
    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > .sub-menu:not(.megamenu) .menu-item > .sub-menu,
    .header.style-16_2 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a::before,
    .header.style-16_2 .box-header-nav .main-menu > .menu-item > a::before,
    .header.style-12_3 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a::before,
    .header.style-12_3 .box-header-nav .main-menu > .menu-item > a::before
    {
        border-color: '.$main_color_2.';
    }
    .header.style-02 ~ .header-sticky .header-control .inner-control > * > a,
    .header.style-02 .header-control .inner-control > * > a,
    .header.style-05 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-05 .header-control .inner-control > * > a .count,
    .header.style-05_2 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-05_2 .header-control .inner-control > * > a .count,
    .header.style-06 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-06 .header-control .inner-control > * > a .count,
    .header.style-07 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-07 .header-control .inner-control > * > a .count,
    .header.style-07_2 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-07_2 .header-control .inner-control > * > a .count,
    .header.style-08 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-08 .header-control .inner-control > * > a .count,
    .header.style-08_3 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-08_3 .header-control .inner-control > * > a .count,
    .header.style-09 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-09 .header-control .inner-control > * > a .count,
    .header.style-12 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-12 .header-control .inner-control > * > a .count,
    .header.style-12_2 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-12_2 .header-control .inner-control > * > a .count,
    .header.style-12_3 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-12_3 .header-control .inner-control > * > a .count,
    .header.style-15 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-15 .header-control .inner-control > * > a .count,
    .header.style-16 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-16 .header-control .inner-control > * > a .count,
    .header.style-17 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-17 .header-control .inner-control > * > a .count,
    .header.style-20 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-20 .header-control .inner-control > * > a .count,
    .header.style-11 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-11 .header-control .inner-control > * > a .count,
    .header.style-14 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-14 .header-control .inner-control > * > a .count,
    .header.style-14 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-14 .box-nav-vertical .block-title,
    .header.style-07 .header-top,
    .header.style-12 .header-message,
    .header.style-12 .block-search,
    .header.style-12 div.dgwt-wcas-search-wrapp .dgwt-wcas-preloader,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-05_2 .box-nav-vertical .block-title,
    .header.style-16_3 .header-message,
    .header.style-12_3 .header-bot .header-submenu > .current-menu-ancestor > a,
    .header.style-12_3 .header-bot .header-submenu > .current_page_ancestor > a,
    .header.style-12_3 .header-bot .header-submenu > .current-menu-parent > a,
    .header.style-12_3 .header-bot .header-submenu > .current-menu-item > a,
    .header.style-12_3 .header-bot .header-submenu > .current_page_item > a,
    .header.style-12_3 .header-bot .header-submenu > li:hover > a
    {
        color: '.$text_main_color_2.';
        fill: '.$text_main_color_2.';
    }
    .header.style-01 .box-header-nav .main-menu > .menu-item > a,
    .header.style-02 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-02 .box-header-nav .main-menu > .menu-item > a,
    .header.style-10 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-10 .box-header-nav .main-menu > .menu-item > a,
    .header.style-10 ~ .header-sticky .header-control .inner-control > * > a,
    .header.style-10 .header-control .inner-control > * > a,
    .header.style-12 .header-submenu > .menu-item > a,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a:hover,
    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > a:hover,
    .header.style-16_3 .header-top .header-inner > * > * > a,
    .header.style-16_3 .header-top .header-submenu > li > a
    {
        color: '.$text_main_color_2.' !important;
        fill: '.$text_main_color_2.' !important;
    }
    .header.style-02 ~ .header-sticky .header-control .inner-control > * > a .count,
    .header.style-02 .header-control .inner-control > * > a .count,
    .header.style-02 .header-control .inner-control > .block-userlink > a .icon
    {
        background-color: '.$text_main_color_2.';
    }
    .header.style-14 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a,
    .header.style-14 .box-nav-vertical .vertical-menu > .menu-item > a
    {
        color: '.$main_color_3.' !important;
        fill: '.$main_color_3.' !important;
    }
    .header.style-05 .header-top,
    .header.style-05 .header-logo .logo::after,
    .header.style-14 ~ .header-sticky,
    .header.style-14 .header-bot,
    .header.style-12 .header-info
    {
        background-color: '.$main_color_3.';
    }
    .header.style-05 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-05 .box-header-nav .main-menu > .menu-item > a,
    .header.style-07 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-07 .box-header-nav .main-menu > .menu-item > a,
    .header.style-08 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-08 .box-header-nav .main-menu > .menu-item > a,
    .header.style-11 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-11 .box-header-nav .main-menu > .menu-item > a,
    .header.style-15 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-15 .box-header-nav .main-menu > .menu-item > a,
    .header.style-09 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-09 .box-header-nav .main-menu > .menu-item > a,
    .header.style-05_2 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-05_2 .box-header-nav .main-menu > .menu-item > a,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .block-title,
    .header.style-05_2 .box-nav-vertical .block-title,
    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > a,
    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > a,
    .header.style-07_2 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-07_2 .box-header-nav .main-menu > .menu-item > a,
    .header.style-17 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-17 .box-header-nav .main-menu > .menu-item > a,
    .header.style-20 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-20 .box-header-nav .main-menu > .menu-item > a,
    .header.style-12_3 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-12_3 .box-header-nav .main-menu > .menu-item > a,
    .header.style-12_3 .header-bot .header-submenu > li > a,
    .header.style-08_3 ~ .header-sticky .box-header-nav .main-menu > .menu-item > a,
    .header.style-08_3 .box-header-nav .main-menu > .menu-item > a
    {
        font-family: '.$special.';
    }
';

echo preg_replace('/\s+/', ' ', $css);