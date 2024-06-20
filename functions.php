<?php
//Registrar menu
function register_my_menus() {
  register_nav_menus(
    array(
        //Creando menu
      'header-izquierdo' => __( ' Menu Princiapl Izquiuerdo' )
  
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
  
 //Agregar estilos a las <a> del menu
 add_filter('nav_menu_link_attributes','clases_menu',10,3);
 function clases_menu($atts,$item,$args) { 
$class='has-arrow waves-effect';
$atts['class']=$class;
return $atts;
 }

 //AGREGAR soporte para imagen destacada
 if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
 

  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
}
 ?>