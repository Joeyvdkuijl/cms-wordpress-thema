<?php 


function laadStijlBlad() {
    wp_enqueue_style('stijl', get_stylesheet_uri());
}

add_action('init', 'laadStijlBlad');

function registreer_menu() {
    $argumenten = array(
        'hoofd-menu' => __('Hoofd menu')
    );
    add_action('init', 'regristreer_menu');
}