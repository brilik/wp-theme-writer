<?php global $args; ?>

<?php

// get field elementor
echo $args['title'] . '<hr>';

foreach ($args['blocks'] as $item) {
    echo $item['title'] . '<br>';
}

?>
<!-- /* html slider */ -->