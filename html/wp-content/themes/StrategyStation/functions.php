<?php
function register_stylesheet() { 
 wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
}

function add_stylesheet() { 
 register_stylesheet();
 wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//テーマのURLを取得
//テーマ内にある画像の出力等したい場合、都度フルパスを書く必要がなくなるため便利
function shortcode_templateurl() {
    return get_stylesheet_directory_uri();
}
add_shortcode('thema_url', 'shortcode_templateurl');