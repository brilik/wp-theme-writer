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
                        <?php ar_the_view('page-story__title'); ?>
                        <?php ar_the_view('page-story__excerpt'); ?>
                        <div class="post_short wow fadeInRight" data-wow-delay="2.8s">
                            <span class="icon-quote-left"></span>
                            <?php ar_the_view('page-story__description-mini'); ?>
                        </div>
                        <div class="down">
                            <div class="down_line wow slideInDown" data-wow-delay="3.2s"></div>
                            <a href="#" class="down_link wow fadeInUp" data-wow-delay="3.4s">
                                <span class="down_link_txt">Читать далее</span>
                                <span class="icon-arrdown"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post_txt_screen">
                    <div class="post_txt js-scroll"><?php ar_the_view('page-story__description-full'); ?></div>
                </div>
            </div>
        </div>
        <div class="post post_form">
            <div class="post_cont">
                <div class="form"><?php ar_the_view('review__form'); ?></div>
            </div>
        </div>
    </div>
    <div class="readmore">
        <div class="readmore_txt">Продолжаем читать</div>
    </div>
    <div class="serie-slider-wrapper up-enter down-leave up-leave">
        <div class="line"></div>
        <div class="serie-slider-title"><span>Рассказы</span></div>
        <div class="mobile-overflow js-gall swiper-container">
            <div class="seria-blur"></div>
            <div class="serie-slider swiper-wrapper">
                <?php
                $args = array(
                    [
                        'href' = '#',
                        'imgSrc' = 'img/image3.jpg',
                        'imgAlt' = 'gallery-slider-cover-0',
                        'title' = 'Вот такой вот парадокс'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'img/image4.jpg',
                        'imgAlt' = 'gallery-slider-cover-1',
                        'title' = 'A Forest Tale'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'img/image5.jpg',
                        'imgAlt' = 'gallery-slider-cover-2',
                        'title' = 'Ultraviolet'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/a6fa42a311fba52cf30b1905c9f814251693d694_vera-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-3',
                        'title' = 'What Color Is Your Paradise'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/4ceecb82e544b776fa87451fee7533b9beabf98c_the-prairies-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-4',
                        'title' = 'Commercial Mix'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/a8bc3e769ebb56f8200d97410f468155e7fe251a_laguna-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-5',
                        'title' = 'Covers'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/7cf10ddcd44dc44be1bec664ad3ac417d80002f4_a-forest-tale-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-6',
                        'title' = 'Ultraviolet'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/814b0707b6d9462d3296976dcfa3f94ccfd6a965_ultraviolet-cover-option.jpg',
                        'imgAlt' = 'gallery-slider-cover-7',
                        'title' = 'Various'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/0e5161041d2ad57d44ae9205d2c72b48c52f9536_what-color-is-your-paradise-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-8',
                        'title' = 'What Color Is Your Paradise'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/267f6f70c84df87cc913fe413e0380917ba1ac4d_commercial-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-9',
                        'title' = 'A Forest Tale'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/9f2950c7103431af16741a98cf330bb5586b8faa_covers-31.jpg',
                        'imgAlt' = 'gallery-slider-cover-10',
                        'title' = 'Archives'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/04f6be416adf369675b6a47abe7d8ce998081157_various-cover-option.jpg',
                        'imgAlt' = 'gallery-slider-cover-11',
                        'title' = 'In The Wild, L\'Officiel Ukraine'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/58bf5c269a040ca5dd61845e265d667191764a66_archives-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-12',
                        'title' = ' Bo-kaap, Blocks of Color'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/97fccfe30bc2d722d55e7905e8208a4e4f469a32_in-the-wild-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-13',
                        'title' = 'Ultraviolet'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/febd1d5f15d450ad35eb04735ce698d9e13ff244_bokaap-cover-.jpg',
                        'imgAlt' = 'gallery-slider-cover-14',
                        'title' = 'Dreamer Pool I, The Origins'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/d3eff8158c1c257f4fa31787a4e802a7ffd6e048_dreamer-pool-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-15',
                        'title' = 'A Forest Tale'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/e6cfff9be5997a8348496bff1b2363e300a1d92f_dreamer-pool-ii-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-16',
                        'title' = 'Laguna'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/b438c3bd466a57c52da2d69fbcbce5d98e849763_cover-1.jpg',
                        'imgAlt' = 'gallery-slider-cover-17',
                        'title' = 'The Prairies'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/0f248f1e9aedec4b12a13b48f6c102ab322a2ba5_dreamer-pool-iii-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-18',
                        'title' = 'Vera, Jute magazine'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/0b0294673260042842a80867406c75c4a523fedd_chapmans-peak-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-19',
                        'title' = 'Double Beauty'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/9e711f57f4b2684335cbd221346d29515e0a5f0c_into-the-blue-cover.jpg',
                        'imgAlt' = 'gallery-slider-cover-20',
                        'title' = 'AVA'
                    ],
                    [
                        'href' = '#',
                        'imgSrc' = 'https://elena-iv-skaya.cdn.prismic.io/elena-iv-skaya/04f6be416adf369675b6a47abe7d8ce998081157_various-cover-option.jpg',
                        'imgAlt' = 'gallery-slider-cover-11',
                        'title' = 'The Wild Rose'
                    ],
                );
                ?>
                <?php ar_the_view('slider__store-page-readmore', $args) ?>
            </div>
            <div class="swiper-button-next swiper-gall-next"><span class="icon-arrow"></span></div>
            <div class="swiper-button-prev swiper-gall-prev"><span class="icon-arrow"></span></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>