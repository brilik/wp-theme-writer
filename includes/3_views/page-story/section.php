<section class="section-post">
    <div class="wrapper">
        <div class="post">
            <div class="post_img_wrap">
                <div class="post_img js-vh js-bg wow fadeInLeft" data-wow-delay="2.0s"
                     data-preload="img/image1.jpg"></div>
            </div>
            <div class="post_cont">
                <div class="back wow fadeInRight" data-wow-delay="2.4s"><a href="#" class="back_link"><span
                                class="icon-back"></span>Назад</a></div>
                <div class="post_top_screen js-post_top_screen js-vh">
                    <div class="post_top">
                        <?php ar_the_view('page-story__title', $args['title']); ?>
                        <?php ar_the_view('page-story__excerpt', $args); ?>
                        <?php ar_the_view('page-story__description-mini', $args['desc']); ?>
                        <div class="down">
                            <div class="down_line wow slideInDown" data-wow-delay="3.2s"></div>
                            <a href="#" class="down_link wow fadeInUp" data-wow-delay="3.4s">
                                <span class="down_link_txt">Читать далее</span>
                                <span class="icon-arrdown"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php ar_the_view('page-story__description-full', $args['desc']); ?>
            </div>
        </div>
        <?php ar_the_view('review__form', $args['review']); ?>
    </div>
    <div class="readmore">
        <div class="readmore_txt">Продолжаем читать</div>
    </div>
    <?php ar_the_view('slider__store-page-readmore', $args['slider']) ?>
</section>