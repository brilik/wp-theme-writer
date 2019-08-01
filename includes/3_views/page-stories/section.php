<?php
$args = array(
    [
        'title' => 'Чао, дорогой!',
        'url' => '#',
        'time' => '3:45',
        'review' => 8,
        'read' => 0,
        'category' => 'short'
    ],
    [
        'title' => 'За мечту платить не нужно название в две строки',
        'url' => '#',
        'time' => '3:45',
        'review' => '',
        'read' => 1,
        'category' => 'short'
    ],
    [
        'title' => 'Какого это... быть взрослым',
        'url' => '#',
        'time' => '3:45',
        'review' => 2,
        'read' => 0,
        'category' => 'middle'
    ],
    [
        'title' => 'Вот такой вот парадокс',
        'url' => '#',
        'time' => '3:45',
        'review' => 0,
        'read' => 1,
        'category' => 'middle'
    ],
    [
        'title' => 'Чао, дорогой! Чао, дорогой! Чао, дорогой!',
        'url' => '#',
        'time' => '3:45',
        'review' => 5,
        'read' => 0,
        'category' => 'long'
    ],
    [
        'title' => 'За мечту платить не нужно',
        'url' => '#',
        'time' => '3:45',
        'review' => 8,
        'read' => 1,
        'category' => 'long'
    ],
);
?>
<section class="section-stories js-vh-f js-scroll">
    <div class="wrapper">
        <div class="stories-scroll">
            <div class="cfilters_wrap">
                <div class="cfilters_title">Фильтр:</div>
                <div class="cfilters filters"></div>
            </div>
            <div class="stories js-stories">
                <?php $count = 0; ?>
                <?php ar_the_view('page-stories__post', $args); ?>
            </div>
        </div>
    </div>
</section>