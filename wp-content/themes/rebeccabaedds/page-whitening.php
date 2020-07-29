<?php get_header() ?>
<section class="whitening">
    <section class="cover_mix cover_mix--whitening">
        <div class="cover_mix__img"></div>
        <div class="cover_mix__content">
            <div class="container">
                <h1 class="cover_mix__content__title">Our Services</h1>
                <h1 class="cover_mix__content__name">/ Whitening</h1>
            </div>
        </div>
        <!-- nav -->
        <div class="nav display_mobile_none">
            <div class="container">
                <ul class="nav__list row">
                    <li class="nav__item dropdown col-xl-4 col-lg-4">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
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
                        <a class="nav-link active" data-fancybox data-src="#SmileWithConfidence" href="javascript:;">Smile with
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
                    <h2 class="Prosthodontics__content__title">Teeth Whitening</h2>
                    <p class="Prosthodontics__content__body">
                        Tooth whitening (or bleaching) is a simple, non-invasive dental treatment used to change the color of natural tooth enamel and is an ideal way to enhance the beauty of your smile.
                       </p>
                    <br/>
                    <p class="Prosthodontics__content__body">
                        Because having whiter teeth has now become the number one aesthetic concern of most patients, there are a number of ways to whiten teeth. The most popular method is using a home tooth whitening system that will whiten teeth dramatically. Since tooth whitening only works on natural tooth enamel, it is important to evaluate replacement of any old fillings, crowns, etc. Replacement of any restorations will be done after bleaching so they will match the newly bleached teeth.
                    </p>
                    <br/>
                    <p class="Prosthodontics__content__body">
                        Tooth whitening is not permanent. A touch-up maybe needed every several years, and more often if you smoke, drink coffee, tea, or wine.
                    </p>    </div>
                <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                    <img src="<?php echo THEME_URL ?>/src/images/_Whitening2.png" alt="">
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
                    <h2 class="content__title">REASONS FOR TEETH WHITENING
                    </h2>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Fluorosis (excessive fluoridation during teeth development)</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Normal wear of the outer teeth layer.</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Stained teeth due to medications (tetracycline, etc.)</p>
                    </div>
                    <div class="content__text">
                        <div class="icon"></div>
                        <p>Yellow, brown stained teeth</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detail_gird container">
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content">
                    <h2>First Visit</h2>
                </div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>This type of tooth whitening usually requires two visits. At the first appointment, impressions (molds) will be made of your teeth to fabricate custom, clear plastic, trays.
                    </p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content second-content"><h2>Second Visit</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>At your second appointment, you will try on the trays for proper fit, and adjustments will be made if necessary. The trays are worn with special whitening solution either twice a day for 30 minutes or overnight for a couple of weeks depending on the degree of staining and desired level of whitening. It is normal to experience tooth sensitivity during the time you are whitening your teeth, but it will subside shortly after you have stopped bleaching.

                    </p>
                </div>
            </div>
        </div>
        <div class=" row detail_gird_content">
            <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
                <div class="detail_gird__left__content"><h2>Care Instructions</h2></div>
            </div>
            <div class="detail_gird__right col-xl-7 col-lg-7">
                <div class="detail_gird__right__content"><p>You will receive care instructions for your teeth and trays, and be encouraged to visit your dentist regularly to help maintain a beautiful, healthy, white smile.</p>
                </div>
            </div>
        </div>
    </section>
</section>
<?php get_footer() ?>