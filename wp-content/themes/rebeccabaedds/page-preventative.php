<?php get_header() ?>
<section class="preventative">
    <section class="cover_mix cover_mix--preventative">
        <div class="cover_mix__img"></div>
        <div class="cover_mix__content">
            <div class="container">
                <h1 class="cover_mix__content__title">Our Services</h1>
                <h1 class="cover_mix__content__name">/ Preventative</h1>
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
                               href=".<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
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
                                    <li><a
                                                href="<?php echo get_permalink(get_page_by_path("preventative")) ?>">Preventative</a>
                                    </li>
                                    <li><a
                                                href="<?php echo get_permalink(get_page_by_path("restorative")) ?>">Restorative</a>
                                    </li>
                                    <li><a
                                                href="<?php echo get_permalink(get_page_by_path("fixed-prosthodontics")) ?>">Fixed
                                            Prosthodontics</a></li>
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_path("implants-instead-of-prosthodontics")) ?>">Implants-instead
                                            of Prosthodontics</a></li>
                                    <li><a
                                                href="<?php echo get_permalink(get_page_by_path("prosthodontics")) ?>">Prosthodontics</a>
                                    </li>
                                    <li><a
                                                href="<?php echo get_permalink(get_page_by_path("oral-surgery")) ?>">Oral
                                            Surgery</a></li>
                                    <li><a
                                                href=".<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
                                    </li>
                                    <li><a
                                                href="<?php echo get_permalink(get_page_by_path("periodontics")) ?>">Periodontics</a>
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
                    <h2 class="Prosthodontics__content__title">Preventive Treatments</h2>
                    <p class="Prosthodontics__content__body">
                        A preventive dental program is a cooperative effort by the patient, dentist, and dental staff to
                        preserve the natural dentition and supporting structures by preventing the onset, progress, and
                        recurrence of dental diseases and conditions.
                    </p>
                    <br/>
                    <p class="Prosthodontics__content__body">
                        Preventing dental disease starts at home with good oral hygiene and a balanced diet. It is
                        continued in the dental office by the efforts of your dentist and dental hygienist to promote,
                        restore, and maintain your oral health.
                    </p>
                </div>
                <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                    <img src="<?php echo THEME_URL ?>/src/images/preventaitve1.png" alt="">
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
                    <h2 class="content__title">BENEFITS OF PREVENTIVE TREATMENTS
                    </h2>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Lowers risk of tooth decay, gum disease, and other dental problems</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Detects early signs of dental problems</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Promotes good oral hygiene habits such as brushing and cleaning</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Helps reduce other health problems such as diabetes, cancers, osteoporosis, eating disorders,
                            and more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detail_descripton container">
        <div class="detail_descripton__title">
            <h2>Types of Dental Preventive Treatments</h2>
        </div>
    </section>

    <section class="detail_gird container">
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content">
                    <h2>Regular Checkups</h2>
                </div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>The dentist will screen your dental condition and evaluate
                        potential signs of gum disease.
                    </p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content"><h2>Dental Cleaning</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>A dentist or hygienist will remove the tartar (hardened
                        plaque that has been left on the tooth) and plaque (a sticky, almost invisible film that forms
                        on the teeth).
                    </p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content"><h2>X-rays</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>Dental X-rays are essential, preventative, diagnostic tools
                        that provide valuable information not visible during a regular dental exam.</p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content"><h2>Flouride</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>Fluoride is the most effective agent available to help
                        prevent tooth decay. It is a mineral that is naturally present in varying amounts in almost all
                        foods and water supplies.
                    </p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content"><h2>Sealant</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>A sealant is a thin, plastic coating applied to the chewing
                        surface of any deep grooves of the teeth. More than 75% of dental decay begins in these deep
                        grooves.
                    </p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content"><h2>Home Care</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>Your personal home care starts by eating balanced meals,
                        reducing the number of snacks you eat, and correctly using the various dental aids that help
                        control the plaque and bacteria that cause dental disease.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="related container">
        <div class="row">
            <div class="related__left col-xl-11 col-lg-11 col-12">
                <h2>Related Pages</h2>
                <a href="#">Bruxism</a>
                <a href="#">Oral Cancer Exam</a>
                <a href="#">Oral Hygiene Aids</a>
                <a href="#">Dental Exams & Cleanings</a>
                <a href="#">Digital X-Rays</a>
                <a href="#">Fluoride Treatment</a>
            </div>
            <div class="related__right">
                <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
            </div>
        </div>
    </section>
</section>
<?php get_footer() ?>