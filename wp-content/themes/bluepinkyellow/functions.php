<?php

if ( function_exists('register_sidebar') )
	
	register_sidebars(4,array(
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',));

register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'primary' ),
	) );

?>