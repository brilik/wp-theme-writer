<?php global $themeAR, $debugAR; ?>

<?php ar_the_view("head"); ?>

<main class="content">
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
                <?php ar_the_view('slider__main-page-quotes'); ?>
            </div>
        </div>
    </div>
    </div>
</main>

<!-- CONTENT EOF   -->

<!-- BEGIN HEADER -->

<?php get_header(); ?>

<!-- HEADER EOF   -->

<aside class="aside wow slideInLeft" data-wow-duration="1s" data-wow-delay="2.8s">
    <ul class="nav">
        <?php
        $menu = $themeAR->get_items_tree_menu('header');
        $count = 0;
        foreach ($menu[0]->childs as $item) {
            $count++;
            $class = "nav_item$count";
            $title = ($item['title'] !== "#") ? $item['title'] : '';

            echo '<li class="nav_item ' . $class . '"><a href="' . $item['url'] . '">' . $title;
            if (!empty($item['desc'])) {
                ar_the_view("icon-svg__$item[desc]");
            } else {
                echo '<br/><span class="icon-copy"></span>';
            }
            echo '</a></li>';
        }
        ?>
    </ul>
</aside>
</div>

<div class="loaded-bg">
    <div class="loaded-bg_wrap">
        <div class="loaded-cont">
            <div class="loaded-img"></div>
            <div class="loaded-num">0%</div>
            <div class="loaded-line"><span></span></div>
        </div>
    </div>
</div>
<!-- BODY EOF   -->
<?php wp_footer(); ?>
</body>
</html>

<?php

$args = array(
    'title' => 'Заголовок отдельный',
    'blocks' => array(
        ['title' => 'Загловок в повторителе',
            'desc' => 'Description'],

        ['title' => 'Загловок в повторителе 2',
            'desc' => 'Description2'],
    ),
);

//ar_the_view('slider__main', $args); // repeater

//$debugAR->dd($args);
?>

<?php // get_footer(); ?>
