<?php get_header() ?>
<section class="cover_mix cover_mix--detail">
    <div class="cover_mix__img"></div>
    <div class="cover_mix__content">
        <div class="container">
            <h1 class="cover_mix__content__title">Our Services</h1>
            <h1 class="cover_mix__content__name">/ Prosthodontics</h1>
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
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("clear-aligners")) ?>">Clear
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
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("tmj-appliance")) ?>">TMJ
                            Appliance</a>
                    </div>
                </li>
                <li class="nav__item dropdown col-xl-4 col-lg-4">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Healthy Function and Prevention
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("preventative")) ?>">Preventative</a>
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("restorative")) ?>">Restorative</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("fixed-prosthodontics")) ?>">Fixed
                            Prosthodontics</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("implants-instead-of-prosthodontics")) ?>">Implants-instead
                            of Prosthodontics</a>
                        <a class="dropdown-item"
                           href="<?php echo get_permalink(get_page_by_path("prosthodontics")) ?>">Prosthodontics</a>
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("oral-surgery")) ?>">Oral
                            Surgery</a>
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
                        <a class="dropdown-item" href="<?php echo get_permalink(get_page_by_path("periodontics")) ?>">Periodontics</a>
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
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("preventative")) ?>">Preventative</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("restorative")) ?>">Restorative</a>
                                </li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("fixed-prosthodontics")) ?>">Fixed
                                        Prosthodontics</a></li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("implants-instead-of-prosthodontics")) ?>">Implants-instead
                                        of Prosthodontics</a></li>
                                <li><a href="<?php echo get_permalink(get_page_by_path("prosthodontics")) ?>">Prosthodontics</a>
                                </li>
                                <li><a
                                            href="<?php echo get_permalink(get_page_by_path("oral-surgery")) ?>">Oral
                                        Surgery
                                    </a
                                    ></li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(get_page_by_path("periodontics")) ?>">Periodontics</a>
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
                <h2 class="Prosthodontics__content__title">Prosthodontics</h2>
                <p class="Prosthodontics__content__body">
                    Prosthodontics is the specialized field of dentistry concerned with diagnosing, planning and
                    executing restorative and cosmetic treatments. Dentists who choose to specialize in prosthodontics
                    must complete three or four more years of dedicated training following dental school.
                </p>
                <br/>
                <p class="Prosthodontics__content__body">
                    A prosthodontist is in essence an architect, who formulates a comprehensive treatment plan and
                    informs the patient as to what is possible. Missing or defective teeth can be extremely detrimental
                    to self-esteem and self-confidence. Using the latest technology, a prosthodontist is able to fill
                    these gaps with functional, natural-looking teeth that boost confidence and enhance the smile.
                </p>
            </div>
            <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                <img src="<?php echo THEME_URL ?>/src/images/detail_img@2x.png" alt="">
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
            <h2 class="reason_detail__right__title">Reasons why a prosthodontist may be
                consulted, including (but not limited to):</h2>
            <div class="reason_detail__right__text">
                <div class="icon"></div>
                <p>Creation of partial or full sets of dentures.</p>
            </div>
            <div class="reason_detail__right__text">
                <div class="icon"></div>
                <p>Desire to whiten the teeth or improve the aesthetics of the smile.</p>
            </div>
            <div class="reason_detail__right__text">
                <div class="icon"></div>
                <p>Filling gaps created by one or more missing teeth.</p>
            </div>
            <div class="reason_detail__right__text">
                <div class="icon"></div>
                <p>Interest in dental implants.</p>
            </div>
        </div>
    </div>
</section>
<section class="detail_des container">
    <h2 class="detail_des__title">What treatments can the prosthodontist perform?</h2>
    <p class="detail_des__body">Prosthodontic treatments are designed to be functional, long-lasting and pleasing to the
        eye. These procedures can only be completed on generally healthy teeth. Issues like gum disease need to be
        controlled before prosthodontic treatments can begin. There are an ever-increasing number of hi-tech
        prosthodontic treatments available including the following:</p>
</section>
<section class="detail_gird container">
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content">
                <h2>Dentail Implants</h2>
            </div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Implants are designed to replace the natural teeth in the best
                    possible way. Titanium
                    roots are implanted in the jawbone in the same way as natural tooth roots. Implants
                    look and feel the same as natural teeth.</p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Dental Veneers</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Veneers are porcelain/ceramic covers that are bonded to the
                    natural teeth. Veneers can instantly solve
                    problems like uneven teeth, stained teeth, and chips and damage caused by general wear and tear.</p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Dental Crowns</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Prosthetic crowns are generally made from porcelain, metal or a
                    combination of the two. They have been designed to mimic the natural crown (surface of the tooth)
                    and can last for up to a decade, and possibly longer.</p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Dental Bridges </h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Conventional and cantilever bridges are used to support a
                    prosthetic tooth. The natural teeth can support the bridge if they are in good condition, or dental
                    implants may be used as anchors.</p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Complete Dentures</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>A complete set of dentures can be created for people who have no
                    teeth due to gum disease or trauma. Complete dentures restore functionality to the mouth and make
                    chewing and speaking easier.</p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2>Partial Dentures</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>Where many teeth have been lost, removable or fixed partial
                    dentures can prove to be an excellent option. They enhance the aesthetics of the smile in addition
                    to improving chewing abilities.</p>
            </div>
        </div>
    </div>
</section>
<section class="detail_img container">
    <div class="img_blur"></div>
    <div class=" detail_img__content">
    </div>
</section>
<section class="detail_des container">
    <h2 class="detail_des__title">What other problems can a prosthodontist treat?</h2>
    <p class="detail_des__body">In addition to performing the treatments described above, the prosthodontist is also
        adept at treating problems with the jaw (TMJ), alleviating severe snoring, managing sleep apnea, and
        reconstructing the teeth following oral cancer treatments. Generally, the prosthodontist works in combination
        with other dental health professionals to ensure the best possible restorative results are achieved.
        <br/>
        If you have questions or concerns about prosthodontics, please contact your prosthodontist.</p>
</section>
<section class="related container">
    <div class="row">
        <div class="related__left col-xl-11 col-lg-11 col-12">
            <h2>Related Pages</h2>
            <a href="#">Crowns (Caps)</a>
            <a href="#">Dental Implants</a>
            <a href="#">Dentures & Partial Dentures</a>
            <a href="#">Fixed Bridges</a>
            <a href="#">Porcelain Veneers</a>
        </div>
        <div class="related__right">
            <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
        </div>
    </div>
</section>
<?php get_footer() ?>
