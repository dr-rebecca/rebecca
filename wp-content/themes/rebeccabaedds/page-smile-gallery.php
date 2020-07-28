<?php get_header(); ?>
<section class="cover_mix cover_mix--gallery">
    <div class="cover_mix__img"></div>
    <div class="cover_mix__content">
        <div class="container">
            <h1 class="cover_mix__content__title">New Patient Info</h1>
            <h1 class="cover_mix__content__name">/ Smile Gallery</h1>
        </div>
    </div>
    <!-- nav -->
    <div class="nav">
        <div class="container">
            <ul class="nav__list">
                <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('financial-options')); ?>">Financial
                        Options</a></li>
                <li class="nav__item nav__item--active"><a
                            href="<?php echo get_permalink(get_page_by_path('smile-gallery')); ?>"> Smile Gallery</a>
                </li>
                <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('testimonials')); ?>">Testimonials</a>
                </li>
                <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('faqs')); ?>"> FAQs</a></li>
                <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('links')); ?>"> Links</a></li>
                <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('smile-analysis')); ?>"> Smile
                        Analysis</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="description container">
    <div class="description__title">
        <h2>Bringing You a Beautiful Smile</h2>
    </div>
    <div class="description__body">
        <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
            sea takimata sanctus est </p>
    </div>
</section>
<section class="gallery_thumbnail">
    <div class="container">
        <img src="<?php echo THEME_URL ?>/src/images/gallery_img_1@2x.png" alt="thumbnail_img">
    </div>
</section>
<section class="list_button">
    <div class="container">
        <div class="row">
            <div class="list_button__content col-xl-3">
                <button data-country="COSMETIC" class="button button--grey active">COSMETIC DENTISTRY</button>
            </div>
            <div class="list_button__content col-xl-3">
                <button class="button button--grey" data-country="RESTORATIONS">RESTORATIONS</button>
            </div>
            <div class="list_button__content col-xl-3">
                <button data-country="PROSTHODONTICS" class="button button--grey">PROSTHODONTICS</button>
            </div>
            <div class="list_button__content col-xl-3">
                <button data-country="PROCEDURES" class="button button--grey">OTHER PROCEDURES</button>
            </div>
        </div>
    </div>
</section>
<section id="wrapper">
    <div class="content container">
        <!-- Tab content -->
        <div class="wrapper_tabcontent">
            <div id="COSMETIC" class="tabcontent active">
                <section class="description container">
                    <div class="description__title">
                        <h2>COSMETIC DENTISTRY</h2>
                    </div>
                    <div class="description__body">
                        <p>Chipped a tooth? Depending on how much fractured off and how heavy your “bite” is, we can do
                            a few
                            things to
                            repair that. In this case, it was an easy fix with some tooth colored bonding (composite)
                            material!
                            Call us
                            for your appointment at 973-838-1177.</p>
                    </div>
                    <p class="note">
                        Note: Patients depicted in photos have provided their consent to display their pictures online.
                        <br/>
                        Results may vary.
                    </p>
                </section>
                <div class="border_m container">
                    <img src="<?php echo THEME_URL ?>/src/icons/border@2x.png" alt="border">
                </div>
                <section class="galery_carousel">
                    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel"
                         data-interval="false">
                        <h2 class="galery_carousel__title">Bonding</h2>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="border_m container">
                    <img src="<?php echo THEME_URL ?>/src/icons/border@2x.png" alt="border">
                </div>
                <section class="galery_carousel">
                    <div id="carousel1" class="carousel slide container" data-ride="carousel" data-interval="false">
                        <h2 class="galery_carousel__title">
                            Black Triangles
                        </h2>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1"></li>
                            <li data-target="#carousel1" data-slide-to="2"></li>
                            <li data-target="#carousel1" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="border_m container">
                    <img src="<?php echo THEME_URL ?>/src/icons/border@2x.png" alt="border">
                </div>
                <section class="galery_carousel">
                    <div id="carousel0" class="carousel slide container" data-ride="carousel" data-interval="false">
                        <h2 class="galery_carousel__title">
                            Procera® Crowns
                        </h2>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel0" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel0" data-slide-to="1"></li>
                            <li data-target="#carousel0" data-slide-to="2"></li>
                            <li data-target="#carousel0" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="border_m container">
                    <img src="<?php echo THEME_URL ?>/src/icons/border@2x.png" alt="border">
                </div>
                <section class="galery_carousel">
                    <div id="carousel2" class="carousel slide container" data-ride="carousel" data-interval="false">
                        <h2 class="galery_carousel__title">
                            Porcelain Veneers </h2>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel2" data-slide-to="1"></li>
                            <li data-target="#carousel2" data-slide-to="2"></li>
                            <li data-target="#carousel2" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="border_m container">
                    <img src="<?php echo THEME_URL ?>/src/icons/border@2x.png" alt="border">
                </div>
                <section class="galery_carousel galery_carousel--fix">
                    <div id="carousel3" class="carousel slide container" data-ride="carousel" data-interval="false">
                        <h2 class="galery_carousel__title">
                            Teeth Whitening </h2>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel3" data-slide-to="1"></li>
                            <li data-target="#carousel3" data-slide-to="2"></li>
                            <li data-target="#carousel3" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/gallery_img@2x.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery3.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dol sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4 galery_carousel__item">
                                        <img class="img_main"
                                             src="<?php echo THEME_URL ?>/src/images/smile_gallery2.png"
                                             alt="">
                                        <p class="galery_carousel__item__title">Lorem ipsum dolor sit amet,
                                            consetetur sadipscing elitr, sed diamad
                                            nonumy eirmod tempor invidun</p>
                                        <img class="img_bottom"
                                             src="<?php echo THEME_URL ?>/src/icons/gallery_other.svg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="RESTORATIONS" class="tabcontent">
                <p class="p-3">updating...</p>
            </div>
            <div id="PROSTHODONTICS" class="tabcontent">
                <p class="p-3">updating...</p>
            </div>
            <div id="PROCEDURES" class="tabcontent">
                <p class="p-3">updating...</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
