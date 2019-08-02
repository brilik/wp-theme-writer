<section class="section-post section-about">
    <div class="wrapper">
        <div class="post">
            <?php ar_the_view('page-about__image', $args['img']) ?>
            <div class="post_cont">
                <div class="post_top_screen js-vh-f">
                    <div class="about_bg">
                        <div class="wow heightIn" data-wow-duration="1.2s" data-wow-delay="3.2s">
                            <img data-src="<?= $themeAR->get_src(); ?>/assets/svg/nib.svg" src="/" class="js-img"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="about">
                        <?php ar_the_view('page-about__title', $args); ?>
                        <?php ar_the_view('page-about__description', $args); ?>
                        <?php ar_the_view('page-about__signature', $args); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>