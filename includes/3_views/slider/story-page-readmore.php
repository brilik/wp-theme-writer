<div class="serie-slider-wrapper up-enter down-leave up-leave">
    <div class="line"></div>
    <div class="serie-slider-title"><span>Рассказы</span></div>
    <div class="mobile-overflow js-gall swiper-container">
        <div class="seria-blur"></div>
        <div class="serie-slider swiper-wrapper">
            <div class="slider-item swiper-slide">
                <div class="serie-slider-mask left"></div>
                <a href="#" draggable="false">
                    <img alt="<?=$args['imgAlt'];?>" data-src="<?=$args['imgSrc']?>" src="/" class="swiper-lazy">
                    <div class="loading-progress"></div>
                    <div class="placeholder"></div>
                </a>
                <div class="serie-slider-mask right"></div>
                <div class="seria-title"><?=$args['title'];?></div>
            </div>
        </div>
        <div class="swiper-button-next swiper-gall-next"><span class="icon-arrow"></span></div>
        <div class="swiper-button-prev swiper-gall-prev"><span class="icon-arrow"></span></div>
        <div class="swiper-pagination"></div>
    </div>
</div>


