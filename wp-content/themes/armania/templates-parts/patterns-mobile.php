<?php
$css = '
    .header-mobile .control a:not(:hover),
    .header-mobile .fixed a:not(:hover),
    .armania-enable-mobile .close-sidebar:not(:hover),
    .header-mobile.mobile-style-02 .menu-toggle:not(:hover)
    {
        color: '.$main_color.';
        fill: '.$main_color.';
    }
    .header-mobile.style-02 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
    .header-mobile.style-05 div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit
    {
        color: '.$main_color.' !important;
        fill: '.$main_color.' !important;
    }
    body.home .header-mobile .fixed a.home-page,
    .header-mobile.style-02 .control a .count,
    .header-mobile.style-05 .control a .count
    {
        color: '.$main_color_2.';
        fill: '.$main_color_2.';
    }
    .header-mobile .control a .count,
    .header-mobile.style-02,
    .header-mobile.style-05,
    .header-mobile.mobile-style-02 .fixed .mobile-toggle
    {
        background-color: '.$main_color_2.';
    }
    .header-mobile .control a .count,
    .header-mobile.style-02 .control a:not(:hover),
    .header-mobile.style-05 .control a:not(:hover),
    .header-mobile.mobile-style-02 .fixed .mobile-toggle
    {
        color: '.$text_main_color_2.';
        fill: '.$text_main_color_2.';
    }
    .header-mobile div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
    .header-mobile.style-02 .header-submenu > li > a,
    .header-mobile.style-05 .header-submenu > li > a
    {
        color: '.$text_main_color_2.' !important;
        fill: '.$text_main_color_2.' !important;
    }
    .header-mobile.style-02 .control a .count,
    .header-mobile.style-05 .control a .count
    {
        background-color: '.$text_main_color_2.';
    }
';

echo preg_replace('/\s+/', ' ', $css);