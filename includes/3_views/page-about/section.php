<section class="section-post section-about">
    <div class="wrapper">
        <div class="post">
            <?php ar_the_view('page-about__image')?>
            <div class="post_cont">
                <div class="post_top_screen js-vh-f">
                    <div class="about_bg">
                        <div class="wow heightIn" data-wow-duration="1.2s" data-wow-delay="3.2s">
                            <img data-src="svg/nib.svg" src="/" class="js-img" alt=""/>
                        </div>
                    </div>
                    <div class="about">
                        <?php ar_the_view('page-about__title'); ?>
                        <div class="about_txt wow fadeInRight" data-wow-delay="2.6s">
                            <div class="js-scroll">
                                <?php ar_the_view('page-about__description'); ?>
                            </div>
                        </div>
                        <?php ar_the_view('page-about__signature'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>