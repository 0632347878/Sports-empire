<?php


add_theme_support( 'menus' );

register_nav_menus(array(
	'top'     => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom'  => 'Нижнее меню',      //Название другого месторасположения меню в шаблоне
	'bottom2' => 'Нижнее меню Корпаратив',
));

register_sidebar( array(
        'name' => __( 'Социальные ссылки', '' ),
        'id' => 'top-area',
        'description' => __( 'Соц', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

?>
