<?php get_header() ?>
<section class="cover_mix cover_mix--periodontics">
    <div class="cover_mix__img"></div>
    <div class="cover_mix__content">
        <div class="container">
            <h1 class="cover_mix__content__title">Our Services</h1>
            <h1 class="cover_mix__content__name">/ Periodontics
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
                <h2 class="Prosthodontics__content__title">Periodontics</h2>
                <p class="Prosthodontics__content__body">
                    Periodontal disease is a progressive condition that begins with mild gum inflammation called
                    gingivitis. It is the leading cause of tooth loss in adults and should be taken very seriously.
                    Periodontal disease (often called gum disease) is typically signified by red, swollen, painful, or
                    bleeding gums, but in some cases has no noticeable symptoms.
                </p>
                <br/>
                <p class="Prosthodontics__content__body">
                    Periodontal disease generally begins when the bacteria living in plaque cause an infection in the
                    surrounding tissues of the teeth, causing them to become irritated and painful. Eventually, this
                    infection will cause the jawbone to recede and the tooth to become loose.
                </p>
                <br>
                <p class="Prosthodontics__content__body">
                Periodontal disease generally begins when the bacteria living in plaque cause an infection in the surrounding tissues of the teeth, causing them to become irritated and painful. Eventually, this infection will cause the jawbone to recede and the tooth to become loose.
                </p>



            </div>
            <div class="Prosthodontics__content col-xl-5 col-lg-5 col-12">
                <img src="<?php echo THEME_URL ?>/src/images/periodontics.png" alt="">
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
                <h2 class="content__title">REASONS FOR PERIODONTAL TREATMENTS</h2>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>
                        Moderate or advanced gum disease</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Localized gum recession or infection</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Before a crown lengthening procedure</p>
                </div>
                <div class="content__text">
                    <div class="icon"></div>
                    <p>Ridge augmentation to correct uneven gum line
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="detail_gird container">
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content ">
                <h2 >Moderate/advanced gum disease</h2>
            </div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content">
                <p>
                    This occurs when there is too little space for the teeth to align normally in the mouth. Overcrowding can cause tooth decay and increase the likelihood of gum disease.                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content ">
                <h2 >Localized gum recession</h2>
            </div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>
                    This can sometimes occur because teeth are missing or because the jaw continues to grow abnormally.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content ">
                <h2>Before crown lengthening</h2>
            </div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content"><p>
                    This common dental problem occurs when one or multiple upper teeth bite inside the lower teeth. As a consequence, uneven wear can lead to bone erosion and gum disease.
                </p>
            </div>
        </div>
    </div>
    <div class=" row detail_gird_content">
        <div class="detail_gird__left col-xl-3 offset-xl-1 col-lg-3 offset-lg-1">
            <div class="detail_gird__left__content "><h2>Ridge augmentation</h2></div>
        </div>
        <div class="detail_gird__right col-xl-7 col-lg-7">
            <div class="detail_gird__right__content">
                <p>   This problem occurs when the upper teeth project further than, or completely cover, the lower teeth. Eventually, jaw pain and TMJ may occur.                </p>
            </div>
        </div>
    </div>
</section>
<section class="detail_descripton container">
    <div class="detail_descripton__title">
        <h2>What Do Periodontal Treatments Involve?</h2>
    </div>
    <div class="detail_descripton__body">
        <p> In the case of mild/moderate periodontal problems, the focus of the periodontist will be on curing the underlying bacterial infection and then providing advice on the most appropriate home cleaning methods.
        </p>
        <p>Sometimes a deep scaling is needed to remove the bacterial plaque and calculus (tartar) from the teeth and tissues. Where periodontal disease is advanced and the jawbone has regressed significantly, more intensive cleaning may be recommended and loose teeth that cannot be saved will be removed.
        </p>
        <p>
            The periodontist is trained in all aspects of dental implant procedures, which can restore functionality to the mouth when teeth have been affected by periodontitis.
        </p>
        <p>
            Because periodontal disease is progressive, it is essential to remove the bacteria and calculus build up to halt the spread of the infection. Your dentist will be happy to advise you on effective cleaning methods and treatment options.
        </p>
    </div>
</section>
<section class="related container">
    <div class="row">




        <div class="related__left col-xl-11 col-lg-11 col-12">
            <h2>Related Pages</h2>
            <div class="row">
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">Crown Lengthening</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">Periodontal Disease and Diabetes</a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">Oral Cancer Exam</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">Periodontal Disease and Osteoporosis</a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">Causes of Periodontal Disease</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">Crowns (Caps)</a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">What is Periodontal (Gum) Disease?</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">Periodontal Disease, Heart Disease and Stroke</a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">        Signs & Symptoms of Periodontal Disease</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">        Periodontal Disease and Respiratory Disease
            </a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">Types of Periodontal Disease</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a"> Diagnosis</a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">Periodontal Disease and Pregnancy</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">Treatment</a>
            <a href="#" class="col-sm-12 col-md-4 col-lg-4 left">Mouth - Body Connection</a>
            <a href="#" class="col-sm-12 col-md-8 col-lg-8 right_a">Maintenance</a>

            </div>
        </div>
        <div class="related__right">
            <img src="<?php echo THEME_URL ?>/src/images/detail_img_5@2x.png" alt="">
        </div>
    </div>
</section>
<?php get_footer() ?>
