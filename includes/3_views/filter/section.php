<div class="filterside">
    <div class="filterside_scroll">
        <div class="filters sfilters js-sfilters">
            <?php
            $args = array(
                [
                    'title' => 'детектив',
                    'url' => '#'
                ],
                [
                    'title' => 'любовь',
                    'url' => '#'
                ],
                [
                    'title' => 'тоска',
                    'url' => '#'
                ],
                [
                    'title' => 'лунной ночью',
                    'url' => '#'
                ]
            );
            ?>
            <?php $count = 0; ?>
            <?php ar_the_view('filter__side-scroll', $args); ?>
        </div>
        <a href="#" class="button button-bord">Применить</a>
    </div>
</div>
<div class="overlay"></div>