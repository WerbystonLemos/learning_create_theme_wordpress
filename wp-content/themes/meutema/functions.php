<?php

/**
 * remove o espacamento no topo das paginas
 * ao usar wp_head()
 */
function remove_admin_bar_bump()
{
    remove_filter('wp_head', '_admin_bar_bump_cb');
}
add_filter('get_header', 'remove_admin_bar_bump', 1);