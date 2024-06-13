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
 ?>