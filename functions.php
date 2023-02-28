<?php

function script_bootstrap(){
    wp_enqueue_style( "link_bootstrap", '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array() , '1.0', '' );
    wp_enqueue_script('link_bt_sc', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',  array(), '1.0', true);
}

add_action('wp_enqueue_scripts','script_bootstrap');