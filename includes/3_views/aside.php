<aside class="aside wow slideInLeft" data-wow-duration="<?=$args['wow-duration'];?>s" data-wow-delay="<?=$args['wow-delay'];?>s">
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