<?php global $themeAR, $debugAR; ?>

<?php ar_the_view("head"); ?>

<main class="content">
    <?php ar_the_view('page-about__section'); ?>
</main>

<!-- CONTENT EOF   -->

<!-- BEGIN HEADER -->

<?php get_header(); ?>

<!-- HEADER EOF   -->
<?php get_footer(); ?>

<aside class="aside wow slideInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s">
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

<?php ar_the_view('review__main'); ?>

<!-- BODY EOF   -->
<?php wp_footer(); ?>
</body>
</html>
