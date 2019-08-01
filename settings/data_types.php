<?php

global $themeAR;


//$themeAR->create_post_type("Феи", "fei", true, array( 'title',   'editor',  'author', "page-attributes" ));
//$themeAR->create_taxonomy("Категория", "catfei", ["fei"], false);
//$themeAR->create_taxonomy("Метки", "tagfei", ["fei"], false);
//$themeAR->create_post_type("FAQ", "faq", false, array( 'title',  'editor', 'author' ));
//$themeAR->create_post_type("Отзывы", "review", false, array( 'title',  'editor', 'author' ));

add_action('admin_menu', function () {
    add_menu_page('Дополнительные настройки сайта',
        'Опции темы',
        'manage_options',
        'theme-options',
        'add_my_setting',
        '',
        80);
});

// show page options
function add_my_setting()
{
    echo '<div class="wrap">';
    echo '<h2>' . get_admin_page_title() . '</h2>';
    // settings_errors() не срабатывает автоматом на страницах отличных от опций
    if (get_current_screen()->parent_base !== 'options-general')
        settings_errors('название_опции');

    echo '<form action="options.php" method="POST">';
    settings_fields("opt_group");     // скрытые защитные поля
    do_settings_sections("opt_page"); // секции с настройками (опциями).
    submit_button();
    echo '</form>';
    echo '</div>';
}