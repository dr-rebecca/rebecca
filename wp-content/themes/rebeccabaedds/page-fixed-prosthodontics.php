<?php get_header() ?>
<section class="cover_mix cover_mix--fixed">
    <div class="cover_mix__img"></div>
    <div class="cover_mix__content">
        <div class="container">
            <h1 class="cover_mix__content__title">Our Services</h1>
            <h1 class="cover_mix__content__name">/ Fixed <br/>Prosthodontics
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
                                    <a href="<?php echo get_permalink(get_page_by_path("oral-appliance-therapy-oat")) ?>">Oral
                                        Appliance Therapy (OAT)</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("tmj-appliance")) ?>">TMJ
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
                <h2 class="Prosthodontics__content__title">Fixed Prosthodontics</h2>
                <p class="Prosthodontics__content__body">
                    Fixed prosthodontics refers to prosthodontic treatments that restore the condition of your teeth and
                    general oral health. The two most common fixed prosthodontic treatments are crowns (caps) and
                    bridges.
                </p>
                <br/>
                <p class="Prosthodontics__content__body">
                    A crown (or cap) is a covering that encases the entire tooth surface, restoring it to its original
                    shape and size. A crown protects and strengthens tooth structure that cannot be restored with
                    fillings or other types of restorations.
                </p>
                <br/>
                <p class="Prosthodontics__content__body">
                    A dental bridge is a fixed (non-removable) appliance and is an excellent way to replace missing
                    teeth.
                </p>
            </div>
            <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                <img src="<?php echo THEME_URL ?>/src/images/fixed1.png" alt="">
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
                <h2 class="content__title">REASONS FOR FIXED PROSTHODONTICS:
                </h2>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>
                        Broken, decayed, or fractured teeth</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Broken, decayed, or fractured teeth</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Prevent remaining teeth from drifting out of position</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Restore chewing and speaking ability</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="detail_descripton container">
    <div class="detail_descripton__title">
        <h2>What Does Getting a Fixed Bridge Involve?
        </h2>
    </div>
    <div class="detail_descripton__body">
        <p>Getting a bridge usually requires two or more visits. While the teeth are numb, the two anchoring teeth are
            prepared by removing a portion of enamel to allow for a crown. A highly accurate impression (mold) is made
            which will be sent to a dental laboratory where the bridge will be fabricated. A temporary bridge will be
            made and worn for several weeks until your next appointment.
        </p>
        <br/>
        <p>At the second visit, your permanent bridge will be carefully checked, adjusted, and cemented to achieve a
            proper fit. Occasionally your dentist may only temporarily cement the bridge, allowing your teeth and tissue
            time to get used to the new bridge. The new bridge will be permanently cemented at a later time.
        </p>
    </div>
</section>
<section class="detail_descripton container">
    <div class="detail_descripton__title">
        <h2>What Does Getting Crowns Involve?
        </h2>
    </div>
    <div class="detail_descripton__body">
        <p>A crown procedure usually requires two appointments. Your first appointment will include taking several
            highly accurate molds (or impressions) that will be used to create your custom crown. A mold will also be
            used to create a temporary crown and will stay on your tooth for approximately two weeks until your new
            crown is fabricated by a dental laboratory.
        </p>
        <br/>
        <p>While the tooth is numb, the dentist will prepare the tooth by removing any decay and shaping the surface to
            properly fit the crown. Once these details are accomplished, your temporary crown will be placed with
            temporary cement and your bite will be checked to ensure you are biting properly.
        </p>
        <br/>
        <p>At your second appointment, your temporary crown will be removed, the tooth will be cleaned, and your new
            crown will be carefully placed to ensure the spacing and bite are accurate.
        </p>
    </div>
</section>
<section class="related container">
    <div class="row">
        <div class="related__left col-xl-11 col-lg-11 col-12">
            <h2>Related Pages</h2>
            <a href="#">Root Canal Therapy
            </a>

        </div>
        <div class="related__right">
            <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
        </div>
    </div>
</section>
<?php get_footer() ?>
