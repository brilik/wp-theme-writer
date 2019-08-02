<?php
/* ПРИМЕЧАНИЕ
 * 1. Каждый блок чередуется классами: не четные - "angle1", четные - "angle2" (позиционирование чашек);
 * 2. Прочтенная запись обозначаеся классом "done" блоку;
 * 3. Время высчитывается по количеству слов. Метод ThemeAR: get_reading_time_text().
 */
?>

<div class="stories_item<?= $args['categoryType'] . $args['classAngel'] . $args['classRead']; ?>">
    <a href="<?= $args['url']; ?>" class="stories_item_icon"></a>
    <div class="stories_item_cont">
        <div class="stories_item_title"><?= $args['title']; ?></div>
        <?php if ($args['read']): ?>
            <div class="stories_item_sm">Прочтено</div>
            <div class="stories_item_link">
                <a href="#" class="stories_item_remove">Удалить из списка</a>
            </div>
        <?php else: ?>
            <div class="stories_item_time">Время чтения: <?= $args['time']; ?></div>
            <div class="stories_item_link">
                <a href="#winrevs" class="fancybox">Отзывов: <?= $args['review']; ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>