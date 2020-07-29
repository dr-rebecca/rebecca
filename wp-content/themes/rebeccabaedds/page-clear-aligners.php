
<?php get_header( ) ?>
<section class="clear-aligner">
<section class="cover_mix cover_mix--clear-aligners">
        <div class="cover_mix__img"></div>
        <div class="cover_mix__content">
            <div class="container">
                <h1 class="cover_mix__content__title">Our Services</h1>
                <h1 class="cover_mix__content__name">/ Clear Aligners</h1>
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
                        <a class="nav-link" data-fancybox data-src="#heathly" href="javascript:;">
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
                                    <li> <a href="<?php echo get_permalink(get_page_by_path("oral-surgery")) ?>">Oral
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
                    <h2 class="Prosthodontics__content__title">Clear Aligners & Invisalign®</h2>
                    <p class="Prosthodontics__content__body">
                    One of the primary concerns people often have about dental braces is the aesthetic impact of the metal on their smiles. Especially for adults, the prospect of wearing unattractive metal braces for long periods of time can be very discouraging. Dr. Ryan Goslin uses Invisalign® as clear aligners, offering an almost invisible aligning system that straightens teeth fast and contains no metal.
                    </p>
                    <br/>
                    <p class="Prosthodontics__content__body">
                        Invisalign® corrects the same dental problems as traditional metal braces; the only difference is that Invisalign® trays are almost invisible to the naked eye, and can be removed at will.
                    </p>
                    <p class="Prosthodontics__content__body">
                        Here are some problems that are commonly corrected with Invisalign®:
                    </p>
                </div>
                <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                    <img src="<?php echo THEME_URL ?>/src/images/clear2.png" alt="">
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
                <h2 class="content__title">REASONS FOR CLEAR ALIGNERS</h2>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Transparent, almost invisible</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Removable when you need to eat</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Easy to clean</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Easy to clean</p>
                </div>
                </div>
               
            </div>
        </div>
    </section>
    <section class="detail_descripton container">
        <div class="detail_descripton__title">
            <h2>What kind of bite problems can Invisalign® correct?</h2>
        </div>
        <div class="detail_descripton__body">
            <p>
                Invisalign® corrects the same dental problems as traditional metal braces; the only difference is that Invisalign® trays are almost invisible to the naked eye, and can be removed at will.
            </p>
            <p>
                Here are some problems that are commonly corrected with Invisalign®:
            </p>
        </div>
    </section>
<section class="detail_gird container">
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content ">
                <h2 class="first-content">First Visit</h2>
            </div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>
                    Getting veneers usually requires two visits to complete the process with little or no local anesthesia required for the procedure. The teeth are prepared by lightly buffing and shaping the surface to allow the shape of the veneer. A mold or impression of the teeth is then taken for the perfect fit. Lastly, the shade (color) will then be chosen by you and the dentist.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content "><h2 class="second-content">Second Visit</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content">
                <p>On the second visit, the teeth will be cleansed with special liquids to achieve a durable bond. The bonding cement will be placed between the tooth and veneer by a special light beam to be used for hardening and setting the bond.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content"><h2 class="third-content">Care Instructions</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content">
                <p>
                    Finally, you will receive home care instructions for your new veneers. Please remember to maintain proper oral hygiene such as brushing, flossing, and regular dental visits to aid in the life of your new beautiful smile
                </p>
            </div>
        </div>
    </div>
</section>
    <section class="detail_descripton container">
        <div class="detail_descripton__title">
            <h2>What Does an Invisalign® Treatment Involve?
</h2>
        </div>
        <div class="detail_descripton__body">
            <p>First, the dentist needs to devise an initial treatment plan before creating the special aligning trays. Three-dimensional digital images are taken of the entire jaw. These images allow the dentist to move specific teeth on the screen, view the jaw from different angles, and also foresee what the face might look like in years to come. In essence, this technology can show how Invisalign® trays will change the facial aesthetics.
                <br/>
                <br/>
                Once planning is complete, a unique set of aligners is made. The total amount of aligners required varies with each individual case, but 20-29 sets per arch is typical.
            </p>
        </div>
    </section>
</section>
<?php get_footer(  )?>