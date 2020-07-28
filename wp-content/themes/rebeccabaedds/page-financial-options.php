<?php get_header() ?>
    <section class="cover_mix cover_mix--financial">
        <div class="cover_mix__img"></div>
        <div class="cover_mix__content">
            <div class="container">
                <h1 class="cover_mix__content__title">New Patient Info</h1>
                <h1 class="cover_mix__content__name">/ Financial Options</h1>
            </div>
        </div>
        <!-- nav -->
        <div class="nav">
            <div class="container">
                <ul class="nav__list">
                    <li class="nav__item nav__item--active"><a href="<?php echo get_permalink(get_page_by_path('financial-options')); ?>"> Financial Options</a></li>
                    <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('smile-gallery')); ?>">Smile Gallery</a></li>
                    <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('testimonials')); ?>">Testimonials</a></li>
                    <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('faqs')); ?>"> FAQs</a></li>
                    <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('links')); ?>"> Links</a></li>
                    <li class="nav__item "><a href="<?php echo get_permalink(get_page_by_path('smile-analysis')); ?>">Smile Analysis</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="description container">
        <div class="description__title">
            <h2>Financial Options</h2>
        </div>
        <div class="description__body">
            <p>If you are a new patient to our office, the attached file contains our new patient bundle with forms that
                will need to be filled out when you arrive at our office. Printing them, filling them out and bringing
                them with you will allow us to attend to your medical needs more quickly than completing them on your
                arrival. Thank you and please call our office if you have any questions at all. </p>
        </div>
    </section>
    <section class="button_req">
        <div class="container">
            <div class="row">
                <a href="#" class="col-xl-4 offset-xl-2 button_req__content">
                    <p class="button_req__content__title">
                        Patient Forms
                    </p>
                </a>
                <a href="#" class="col-xl-4 button_req__content">
                    <p class="button_req__content__title">
                        HIPAA and Consent Forms
                    </p>
                </a>
            </div>
        </div>
    </section>
    <section class="pay_method">
        <div class="container">
            <div class="row">
                <div class="pay_method__content pay_method__content--fix col-xl-6 col-lg-6">
                    <h2 class="pay_method__content__title">Payment Options
                    </h2>
                    <p class="pay_method__content__body">For your convenience, we accept cash, personal checks, money
                        orders and major credit cards. Payment is expected at the time services are performed. When more
                        extensive dental care is necessary, financial arrangements can be made with our office.
                    </p>
                    <img src="<?php echo THEME_URL ?>/src/images/icon_financing.svg" alt="icon">
                </div>

                <div class="pay_method__content  col-xl-6 col-lg-6">
                    <h2 class="pay_method__content__title">Financing
                    </h2>
                    <p class="pay_method__content__body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                        takimata sanctus est.
                        <br/>
                        <br/>
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="Insuraces">
        <div class="container">
            <div class="row">
                <div class="Insuraces__img col-xl-12">
                    <img src="<?php echo THEME_URL ?>/src/images/ins_img@2x.png" alt="images">
                </div>
                <div class="Insuraces__content col-xl-6 col-lg-6">
                    <h2>Insurance</h2>
                    <p>As a service to our patients, our practice accepts most dental insurance programs, including
                        non-managed care, indemnity (traditional) and PPO out-of-network. We are not part of any managed
                        care network. Our accounting staff will prepare all the necessary forms for your dental
                        benefits. However, we remind you that your specific policy is an agreement between you and your
                        insurance company. Please keep in mind that you are responsible for your total obligation should
                        your insurance benefits result in less coverage than anticipated. Our staff will gladly submit a
                        pre-treatment estimate to your insurance company so that you will know what your benefits will
                        be.</p>
                </div>
                <div class="Insuraces__content Insuraces__content--fix col-xl-6 col-lg-6">
                    <p>The fees charged for services rendered to those who are insured are the usual and customary fees
                        charged to all our patients for similar services. Your policy may base its allowances on a fixed
                        fee schedule, which may or may not coincide with our usual fees. You should be aware that
                        different insurance companies vary greatly in the types of coverage available. Also, some
                        companies take care of claims promptly while others delay payment for several months.</p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>