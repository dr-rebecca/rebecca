<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php the_title() ?></title>
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/vendor.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/theme.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/vendors.min.css">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open() ?>
<header>
    <nav>
        <div class="container nav_header">
            <div class="row">
                <div class="nav_header__left col-xl-6 col-lg-6 col-md-6 col-6">
                    <a href="<?php echo get_home_url() ?>"> <img src="<?php echo THEME_URL ?>/src/images/Logo.svg"
                                                                 alt="Logo"></a>
                </div>
                <div class="nav_header__right col-xl-6 col-lg-6 col-md-6 col-6">
                    <a class="display_mobile_none nav_header__right__button  button button--primary">BOOK NOW</a>
                    <a data-fancybox data-src="#hidden-content" href="javascript:;"><img
                                src="<?php echo THEME_URL ?>/src/images/Hambugermenu.svg" alt="Logo"></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="modal-menu" style="display: none;" id="hidden-content">
        <div class="row">
            <div class="col-xl-4 col-lg-4 modal-menu__left">
                <a class="d-lg-none" href="<?php echo get_home_url() ?>"> <img
                            src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"></a>
                <a class="display_mobile_none" href="<?php echo get_home_url() ?>"><img
                            src="<?php echo THEME_URL ?>/src/images/Logo_menu_2.svg" alt="Logo menu"></a>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo get_home_url(  ); ?>"
                           aria-selected="true">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('about-us')); ?>"
                           aria-selected="false">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('meet-dr-bae')); ?>"
                           aria-selected="false">MEET DR.BAE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('meet-our-team')); ?>"
                           aria-selected="false">MEET OUR TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('our-technology')); ?>"
                           aria-selected="false">OUR TECHNOLOGY</a>
                    </li>
                    <li class="d-lg-none nav-item ">
                        <a class="nav-link" data-fancybox data-src="#our_services" href="javascript:;"
                           aria-selected="false">OUR SERVICES</a>
                    </li>
                    <li class="d-lg-none nav-item">
                        <a class="nav-link" data-fancybox data-src="#patient" href="javascript:;" aria-selected="false">NEW
                            PATIENTS INFO</a>
                    </li>
                    <li class="display_mobile_none nav-item">
                        <a class="nav-link dropdown_menu_icon " id="v-pills-settings-tab" data-toggle="pill"
                           href="#v-pills-services" role="tab" aria-controls="v-pills-settings" aria-selected="false">OUR
                            SERVICES</a>
                    </li>
                    <li class="display_mobile_none nav-item">
                        <a class="nav-link dropdown_menu_icon " id="v-pills-settings-tab" data-toggle="pill"
                           href="#v-pills-patient" role="tab" aria-controls="v-pills-settings" aria-selected="false">NEW
                            PATIENTS INFO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('membership')); ?>"
                           aria-selected="false">MEMBERSHIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo get_permalink(get_page_by_path('homecare-instruction')); ?>"
                           aria-selected="false">HOMECARE INSTRUCTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('post-of-intructions')); ?>"
                           aria-selected="false">POST OF INTRUCTION</a>
                    </li>
                    <li class="d-lg-none nav-item">
                        <a class="nav-link" data-fancybox data-src="#blog" href="javascript:;" aria-selected="false">BLOG
                        </a>
                    </li>
                    <li class="display_mobile_none nav-item">
                        <a class="nav-link dropdown_menu_icon " id="v-pills-settings-tab" data-toggle="pill"
                           href="#v-pills-blog" role="tab" aria-controls="v-pills-settings"
                           aria-selected="false">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('contact')); ?>"
                           aria-selected="false">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-4 display_mobile_none modal-menu__middle">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show" id="v-pills-services" role="tabpanel"
                         aria-labelledby="v-pills-message">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('our-services')); ?>">About
                                    Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Smile with Confidence</a>
                                <ul class="menu_with_list">
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path("whitening")); ?>">
                                            Whitening</a>
                                    </li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('veneers')); ?>"> Vennes</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path('clear-aligners')); ?>">
                                            Clear
                                            Aligners</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Breathe Easily, Sleep Better</a>
                                <ul class="menu_with_list">
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path('myobrace')); ?>">
                                            Myobrace</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path('oral-appliance-therapy-oat')); ?>">
                                            Oral Appliance Therapy (OAT)</a>
                                    </li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('tmj-appliance')); ?>"> TMJ
                                            Appliance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Heathy Function & Presentation</a>
                                <ul class="menu_with_list">
                                    <li><a href="<?php echo get_permalink(get_page_by_path('preventative')); ?>">
                                            Preventative </a></li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('restorative')); ?>">
                                            Restorative </a></li>
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path('fixed-prosthodontics')); ?>">
                                            Fixed </a></li>
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path('implants-instead-of-prosthodontics')); ?>">
                                            Implants </a></li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('prosthodontics')); ?>">
                                            Prosthodontics </a></li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path("oral-surgery")); ?>"> Oral
                                            Surgery </a></li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('endodontics')); ?>">
                                            Endodontics </a></li>
                                    <li><a href="<?php echo get_permalink(get_page_by_path('periodontics')); ?>">
                                            Periodontics </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-patient" role="tabpanel" aria-labelledby="v-pills-settings">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('financial-options')); ?>">Finacial
                                    Option</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('smile-gallery')); ?>">Smile
                                    Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('testimonials')); ?>">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('faqs')); ?>">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('links')); ?>">Links</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('smile--analysis')); ?>">Smile
                                    Analysis</a>
                            </li>
                    </div>
                    <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-settings">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('blog-detail')); ?>">Blog Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?php echo get_permalink(get_page_by_path('blog-lastest-news')); ?>">Blog
                                    Lastest News</a>
                            </li>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 modal-menu__right">
                <div class="modal-menu__right__info">
                    <h2>(973) 838 - 1177</h2>
                    <p>1375 State Route 23, Butler, NJ 07405</p>
                </div>
                <div class="modal-menu__right__social">
                    <a href="https://www.facebook.com/BaeDDS23" target="_blank"> <i class="fa fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/rebeccabaedds" target="_blank"><i class="fa fa-instagram"></i></a>
                    <p class="display_mobile_none">@ 2020 Rebecca Bae Dental</p>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;" id="our_services">
        <div class="menu_popup">
            <a href="#"> <img src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"> </a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('our-services')); ?>">About
                        Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Smile with Confidence</a>
                    <ul class="menu_with_list">
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path("whitening")); ?>"> Whitening</a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('veneers')); ?>"> Vennes</a></li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('clear-aligners')); ?>"> Clear
                                Aligners</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Breathe Easily, Sleep Better</a>
                    <ul class="menu_with_list">
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('myobrace')); ?>"> Myobrace</a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('oral-appliance-therapy-oat')); ?>"> Oral
                                Appliance Therapy (OAT)</a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('tmj-appliance')); ?>"> TMJ Appliance</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Heathy Function & Presentation</a>
                    <ul class="menu_with_list">
                        <li><a href="<?php echo get_permalink(get_page_by_path('preventative')); ?>"> Preventative </a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('restorative')); ?>"> Restorative </a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('fixed-prosthodontics')); ?>"> Fixed </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('implants-instead-of-prosthodontics')); ?>">
                                Implants </a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('prosthodontics')); ?>">
                                Prosthodontics </a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path("oral-surgery")); ?>"> Oral Surgery </a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('endodontics')); ?>"> Endodontics </a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('periodontics')); ?>"> Periodontics </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div style="display: none;" id="patient">
        <div class="menu_popup">
            <a href="#"> <img src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"> </a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('financial-options')); ?>">Finacial
                        Option</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('smile-gallery')); ?>">Smile
                        Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('testimonials')); ?>">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('faqs')); ?>">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('links')); ?>">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('smile--analysis')); ?>">Smile
                        Analysis</a>
                </li>
            </ul>
        </div>
    </div>
    <div style="display: none;" id="blog">
        <div class="menu_popup">
            <a href="#"> <img src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"> </a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('blog-detail')); ?>">Blog Detail
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('blog-lastest-news')); ?>"> Blog
                        Lastest News
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>