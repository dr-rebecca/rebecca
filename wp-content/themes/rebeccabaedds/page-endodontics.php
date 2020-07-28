<?php get_header() ?>
<section class="cover_mix cover_mix--endodontics">
    <div class="cover_mix__img"></div>
    <div class="cover_mix__content">
        <div class="container">
            <h1 class="cover_mix__content__title">Our Services</h1>
            <h1 class="cover_mix__content__name">/ Endodontics
            </h1>
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
                                    <a
                                            href="<?php echo get_permalink(get_page_by_path("oral-appliance-therapy-oat")) ?>">Oral
                                        Appliance Therapy (OAT)</a>
                                </li>
                                <li>
                                    <a
                                            href="<?php echo get_permalink(get_page_by_path("tmj-appliance")) ?>">TMJ
                                        Appliance</a>
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
                <h2 class="Prosthodontics__content__title">Endodontics</h2>
                <p class="Prosthodontics__content__body">
                    Endodontics is a specialized branch of dentistry that deals with the complex structures found inside
                    the teeth. Endodontists receive additional dental training after completing dental school to enable
                    them to perform both complex and simple procedures, including root canal therapy.
                </p>
                <br/>
                <p class="Prosthodontics__content__body">
                    Historically, a tooth with a diseased nerve would be removed immediately, but endodontists are now
                    able to save the natural tooth in most cases. Generally, extracting the inner tooth structures, then
                    sealing the resulting gap with a crown restores health and functionality to damaged teeth.
                </p>
            </div>
            <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                <img src="<?php echo THEME_URL ?>/src/images/edodontics.png" alt="">
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
                <h2 class="content__title">SIGNS AND SYMPTOMS OF ENDODONTIC PROBLEMS
                </h2>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>
                        Inflammation and tenderness in the gums</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Teeth that are sensitive to hot and cold foods</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Tenderness when chewing and biting</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Tooth discoloration
                    </p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Unexplained pain in the nearby lymph nodes</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="detail_descripton container">
    <div class="detail_descripton__title">
        <h2>Why Should You Seek Endodontic Treatments?</h2>
    </div>
    <div class="detail_descripton__body">
        <p>Endodontic treatment (or root canal therapy) is performed to save the natural tooth. Despite many advanced
            restorations available, most dentists agree that there is no substitute for healthy, natural teeth. Here are
            some of the main causes of inner tooth damage that requires endodontic treatments:
        </p>
    </div>
</section>
<section class="detail_descripton container">
    <div class="detail_descripton__title">
        <h2>What Does an Endodontic Procedure Involve?
        </h2>
    </div>
    <div class="detail_descripton__body">
        <p>What Does an Endodontic Procedure Involve?
            An endodontic procedure usually takes between one and three visits to complete. Complete X-rays of the teeth
            will be taken and examined before the treatment begins.
        </p>
        <br/>
        <p>What Does an Endodontic Procedure Involve?
            An endodontic procedure usually takes between one and three visits to complete. Complete X-rays of the teeth
            will be taken and examined before the treatment begins.
        </p>
        <br/>
        <p>The space will then be shaped, cleaned, and filled with gutta-percha. Gutta-percha is a biocompatible
            material that is somewhat similar to rubber. Cement will be applied on top to ensure that the root canals
            are completely sealed off. Usually, a temporary filling will be placed to restore functionality to the tooth
            prior to the permanent restoration procedure. During the final visit, a permanent restoration or crown will
            be placed.
        </p>
    </div>
</section>
<section class="related container">
    <div class="row">
        <div class="related__left col-xl-11 col-lg-11 col-12">
            <h2>Related Pages</h2>
            <a href="#">Root Canal Therapy</a>
        </div>
        <div class="related__right">
            <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
        </div>
    </div>
</section>
<?php get_footer() ?>