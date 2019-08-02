<?php
$sliderQuotes = array(
    [
        'link' => '#',
        'description' => '— И долго ты еще будешь искать своего мужчину? <br/>— Лучше всю жизнь искать своего человека, чем вечно бояться потерять чужого.'
    ],
    [
        'link' => '#',
        'description' => '— И долго ты еще будешь искать своего? <br/>— Лучше всю жизнь искать своего человека, чем вечно бояться потерять чужого.'
    ],
    [
        'link' => '#',
        'description' => '— И долго ты еще будешь искать? <br/>— Лучше всю жизнь искать своего человека, чем вечно бояться потерять чужого.'
    ],
);
?>
<div class="section-welcome js-vh">
    <div id="scene" class="scene">
        <div class="layer" data-depth="0.1">
            <div class="city"></div>
        </div>
        <div class="layer" data-depth="0.05">
            <div class="stars"></div>
        </div>

        <div class="layer" data-depth="0.1">
            <div class="star star1">
                <img data-src="<?php $themeAR->the_src(); ?>/assets/img/star.png" class="js-img" src="/" alt="star">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="star star2">
                <img data-src="<?php $themeAR->the_src(); ?>/assets/img/star.png" class="js-img" src="/" alt="star">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="star star3">
                <img data-src="<?php $themeAR->the_src(); ?>/assets/img/star.png" class="js-img" src="/" alt="star">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="star star4">
                <img data-src="<?php $themeAR->the_src(); ?>/assets/img/star.png" class="js-img" src="/" alt="star">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="star star5">
                <img data-src="<?php $themeAR->the_src(); ?>/assets/img/star.png" class="js-img" src="/" alt="star">
            </div>
        </div>

        <div class="layer" data-depth="0.4">
            <div class="movingsky"></div>
        </div>
        <div class="layer" data-depth="0.5">
            <div class="backcloud1"></div>
        </div>
        <div class="layer" data-depth="0.5">
            <div class="backcloud2"></div>
        </div>

    </div>
    <div class="movingsky2"></div>
    <div class="moon">
        <img data-src="<?php $themeAR->the_src(); ?>/assets/img/moon.png" class="js-img" src="/" alt="">
    </div>
    <div class="topcloud1"></div>
    <div class="topcloud2"></div>
    <div class="girl"></div>
    <div class="clouds1"></div>
    <div class="clouds2"></div>
    <div class="wrapper">
        <div class="welcome">
            <div class="cloud1"></div>
            <div class="cloud2"></div>
            <div class="cloud3"></div>
            <?php ar_the_view('slider__main-page-quotes', $sliderQuotes); ?>
        </div>
    </div>
</div>
</div>