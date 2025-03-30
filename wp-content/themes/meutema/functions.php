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

/**
 * habilida  a imagem de destaque do post
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(387, 151, true);

/**
 * verifica se o sidebar ja existe
 * caso contrario ira registrar um novo
 * com os params passado em um array associativo
 */
if( function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="thumbnail"><div class="caption">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}