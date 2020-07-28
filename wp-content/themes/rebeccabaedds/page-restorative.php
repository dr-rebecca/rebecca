<?php get_header() ?>
<section class="cover_mix cover_mix--restorative">
    <div class="cover_mix__img"></div>
    <div class="cover_mix__content">
        <div class="container">
            <h1 class="cover_mix__content__title">Our Services</h1>
            <h1 class="cover_mix__content__name">/ Restorative</h1>
        </div>
    </div>
    <!-- nav -->
    <div class="nav display_mobile_none">
        <div class="container">
            <ul class="nav__list row">
                <li class="nav__item dropdown col-xl-4 col-lg-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Smile with Confidence
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("whitening")) ?>">Whitening</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("veneers")) ?>">Veneers</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("clear-aligners")) ?>">Clear
                            Aligners</a>
                    </div>
                </li>
                <li class="nav__item dropdown col-xl-4 col-lg-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Breathe Easy, Sleep Better
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("myobrace")) ?>">Myobrace</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("oral-appliance-therapy-oat")) ?>">Oral
                            Appliance Therapy (OAT)</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("tmj-appliance")) ?>">TMJ
                            Appliance</a>
                    </div>
                </li>
                <li class="nav__item dropdown col-xl-4 col-lg-4">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Healthy Function and Prevention
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("preventative")) ?>">Preventative</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("restorative")) ?>">Restorative</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("fixed-prosthodontics")) ?>">Fixed
                            Prosthodontics</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("implants-instead-of-prosthodontics")) ?>">Implants-instead
                            of Prosthodontics</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("prosthodontics")) ?>">Prosthodontics</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("oral-surgery")) ?>">Oral
                            Surgery</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("periodontics")) ?>">Periodontics</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="nav_mobile_dentail d-lg-none">
        <div class="nav container">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav-link" data-fancybox data-src="#SmileWithConfidence" href="javascript:;">Smile with
                        Confidence
                    </a>
                    <div style="display: none;" id="SmileWithConfidence">
                        <div class="menu_popup">
                            <a href="<?php echo get_home_url() ?>"> <img
                                        src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"> </a>
                            <h2>Smile with Confidence</h2>
                            <ul class="menu_with_list">
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("whitening")) ?>">Whitening</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("veneers")) ?>">Veneers</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("clear-aligners")) ?>">Clear
                                        Aligners</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav__item ">
                    <a class="nav-link" data-fancybox data-src="#SleepBetter" href="javascript:;">
                        Breathe Easy, Sleep Better
                    </a>
                    <div style="display: none;" id="SleepBetter">
                        <div class="menu_popup">
                            <a href="<?php echo get_home_url() ?>"> <img
                                        src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"> </a>
                            <h2 class="nav__item__content__title">Breathe Easily, Sleep Better</h2>
                            <ul class="menu_with_list">
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("myobrace")) ?>">Myobrace</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("oral-appliance-therapy-oat")) ?>">Oral
                                        Appliance Therapy (OAT)</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("tmj-appliance")) ?>">TMJ Appliance</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav__item">
                    <a class="nav-link active" data-fancybox data-src="#heathly" href="javascript:;">
                        Healthy Function and Prevention
                    </a>
                    <div style="display: none;" id="heathly">
                        <div class="menu_popup">
                            <a href="<?php echo get_home_url() ?>"> <img
                                        src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"> </a>
                            <h2 class="nav__item__content__title">Healthy Function and Prevention</h2>
                            <ul class="menu_with_list">
                                <li><a href="<?php echo get_permalink(get_page_by_path("preventative")) ?>">Preventative</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("restorative")) ?>">Restorative</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("fixed-prosthodontics")) ?>">Fixed
                                        Prosthodontics</a></li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("implants-instead-of-prosthodontics")) ?>">Implants-instead
                                        of Prosthodontics</a></li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("prosthodontics")) ?>">Prosthodontics</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("oral-surgery")) ?>">Oral
                                        Surgery</a></li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("periodontics")) ?>">Periodontics</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="Prosthodontics">
    <div class="container">
        <div class="row">
            <div class="Prosthodontics__content col-xl-7 col-lg-7 col-12">
                <h2 class="Prosthodontics__content__title">Restorative Dentistry</h2>
                <p class="Prosthodontics__content__body">
                    It’s great news that the incidence of tooth decay has significantly diminished over the years due to
                    the use of fluorides and an increase in patient awareness. However, your teeth may still be
                    susceptible to decay, infection, and breakage and sometimes need to be restored back to health.
                    Through improved techniques and modern technology, Dr. Rebecca and our team are now able to offer
                    more options for restoring a tooth back to its normal shape, appearance and function.
                </p>
            </div>
            <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                <img src="<?php echo THEME_URL ?>/src/images/restorative1.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="reason_detail container container--mix">
    <div class="row reason_detail_color">
        <div class="reason_detail__left col-xl-4 col-lg-4 col-12">
            <img src="<?php echo THEME_URL ?>/src/images/detail_img_3@2x.png" alt="">
        </div>
        <div class="reason_detail__right col-xl-8 col-lg-8 col-12">
            <div class="content">
                <h2 class="content__title">REASONS FOR RESTORATIVE DENTISTRY:
                </h2>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>
                        Fill in unattractive spaces between teeth</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Improve or correct an improper bite</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Repair damaged and decayed teeth</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Replace missing teeth</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Restore normal eating and chewing</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="detail_descripton container">
    <div class="detail_descripton__title">
        <h2>Restorative Dentistry Treatments</h2>
    </div>
</section>
<section class="detail_gird container">
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content">
                <h2>Root Canal Therapy</h2>
            </div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Root canal therapy is needed when the nerve of a tooth is
                    affected by decay or infection. It is used to save a tooth that otherwise would die and have to be
                    removed.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Empress® Restorations</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Empress® restorations are completely metal-free, and are
                    constructed from inorganic material which is baked and cured at high temperatures.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Dental Implants</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>A great way to replace missing teeth and also provide a fixed
                    solution to having removable partial or complete dentures. Implants provide excellent support and
                    stability for these dental appliances.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Inlay Restorations</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Utilized to repair teeth that have large defective fillings or
                    have been damaged by decay or trauma. Inlays are an ideal alternative to conventional silver and
                    composite fillings.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Onlay Restoration
                </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Utilized to conservatively repair teeth that have large
                    defective fillings or have been damaged by decay or trauma. Onlays are an ideal alternative to
                    crowns (caps).
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Amalgam Fillings
                </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>A silver amalgam filling is used to repair a tooth that is
                    affected by decay, cracks, or fractures. The decayed or affected portion of the tooth will be
                    removed, then filled with a silver filling.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Composite Fillings
                </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>A composite filling is used to repair a tooth that is affected
                    by decay, cracks, fractures, etc. The decayed or affected portion of the tooth will be removed and
                    then filled with a composite filling.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Crowns (Cap)
                </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>A crown is a covering that encases the entire tooth surface
                    restoring it to its original shape and size. It protects and strengthens tooth structure that cannot
                    be restored with fillings.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Dentures
                </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Dentures are used to closely resemble your natural teeth and may
                    even enhance your smile. There are two types: complete and partial dentures.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Fixed Bridges
                </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>A fixed bridge is a non-removable appliance that can replace
                    missing teeth naturally. Dental bridges are highly durable and will last for many years.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="related container">
    <div class="row">
        <div class="related__left col-xl-11 col-lg-11 col-12">
            <h2>Related Pages</h2>
            <a href="#">Root Canal Therapy</a>
            <a href="#">Empress® Restorations</a>
            <a href="#">Dental Implants</a>
            <a href="#">Inlay Restorations</a>
            <a href="#">Onlay Restorations</a>
        </div>
        <div class="related__right">
            <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
        </div>
    </div>
</section>
<?php get_footer() ?>
