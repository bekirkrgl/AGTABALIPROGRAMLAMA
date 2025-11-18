<?php
function ss_enqueue_files() {
    // style.css (tema bilgisi vs.)
    wp_enqueue_style('ss-style', get_stylesheet_uri());

    // asıl tasarım dosyan: style2.css
    wp_enqueue_style(
        'ss-custom',
        get_template_directory_uri() . '/style2.css',
        array('ss-style')
    );
}
add_action('wp_enqueue_scripts', 'ss_enqueue_files');
?>
