<?php get_header() ?>
<section class="TMJ">
    <section class="cover_mix cover_mix--tmj">
        <div class="cover_mix__img"></div>
        <div class="cover_mix__content">
            <div class="container">
                <h1 class="cover_mix__content__title">Our Services</h1>
                <h1 class="cover_mix__content__name">/ TMJ Appliance</h1>
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                        <a class="nav-link active" data-fancybox data-src="#SleepBetter" href="javascript:;">
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
                        <a class="nav-link" data-fancybox data-src="#heathly" href="javascript:;">
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
                                                href="<?php echo get_permalink(get_page_by_path("endodontics")) ?>">Endodontics</a>
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
                    <h2 class="Prosthodontics__content__title">Clear TMJ Appliance</h2>
                    <p class="Prosthodontics__content__body">
                        Temporomandibular Joint Dysfunction Syndrome (TMJ) is a common condition affecting a wide
                        variety of people. TMJ is characterized by severe headaches, jaw pain of varying degrees,
                        grinding teeth, and an intermittent ringing in the ears. The vast majority of TMJ sufferers are
                        unaware that the root cause of these problems is something that a dentist can effectively treat.
                    </p>
                    <br class="d-none d-lg-block"/>
                    <p class="Prosthodontics__content__body">
                        The symptoms of TMJ are debilitating and can greatly interfere with everyday life. The comfort
                        and general well being of the patient is at the heart of the dental practice, so pain relief is
                        the first consideration of the dentist. The dentist is able to test, diagnose, and devise an
                        immediate plan to treat the underlying causes of the TMJ disorder.
                    </p>
                </div>
                <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                    <img src="<?php echo THEME_URL ?>/src/images/tmj.png" alt="">
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
                    <h2 class="content__title">REASONS FOR TMJ TREATMENTS:</h2>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Misalignment of the teeth, often called “bad bite”</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Grinding teeth at night</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Injury</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Locking of the joint, difficulties in opening and closing your mouth</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Difficulty chewing or having pain while chewing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detail_descripton container">
        <div class="detail_descripton__title text-center">
            <h2>What Does Treating TMJ Involve?</h2>
        </div>
        <div class="detail_descripton__body text-left">
           <p>
            TMJ could be a result of several different problems. Bad bite is the most common, but an injury resulting from a blow to the meniscus cartilage is also a possibility. Initially, the dentist will thoroughly examine the jaw area, the patient’s bite, take X-rays, and review the patient’s history in order to make an accurate diagnosis and recommend necessary treatment
           </p>
            <p>
            A better option is to change the shape of the teeth and get rid of the bad bite completely, often called “realignment.” This is especially useful because it alleviates TMJ symptoms and may improve the aesthetic appearance of the teeth as well. Realignment involves adjusting the relationship between how the upper teeth come together with the lower teeth. This may require new restorations and/or adjusting the natural teeth as well. It is not a painful procedure, and it is one the dentist has performed with great success numerous times. As with any procedure, the dentist will be happy to answer questions and discuss symptoms, options, and treatments.
            </p>
            <p>Once a firm diagnosis is attained, there are several ways in which relief can be provided. A specially
                molded bite guard can be created to stop teeth grinding during the night. A bite relationship analysis
                may be recommended by the dentist. The dentist can also provide advice on relaxation techniques which
                will lessen the effects of stress. As a last alternative, the dentist is also able to prescribe muscle
                relaxants.

            </p>
        </div>
    </section>
    <section class="related container">
        <div class="row">
            <div class="related__left col-xl-11 col-lg-11 col-12">
                <h2>Related Pages</h2>
                <a href="#">Bruxism</a>
            </div>
            <div class="related__right">
                <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
            </div>
        </div>
    </section>
</section>
<?php get_footer() ?>