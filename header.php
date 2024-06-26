<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Tiendas  - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href= " <?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/images/favicon.ico">

        <!-- App css -->
        <link href=" <?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href=" <?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href=" <?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
        

    </head>

    <body>
<!-- Begin page -->
<div id="layout-wrapper">
            <div class="header-border"></div>




<header id="page-topbar">
                <div class="navbar-header">

                    <div class="d-flex align-items-left">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> Crear nuevo
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Solicitud
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Software
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Sistema EMS
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Aplicacion CRM
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-none d-sm-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notificaciones </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> Ver todo</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="plantilla/Admin/vertical/assets/images/users/avatar-2.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                                <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle">
                                                    <i class="mdi mdi-cloud-download-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Descarga disponible !</h6>
                                                <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                    Please download here.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="plantilla/Admin/vertical/assets/images/users/avatar-3.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                                <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="plantilla/Admin/vertical/assets/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">DENIS.</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Inbox</span>
                                    <span>
                                        <span class="badge badge-pill badge-info">3</span>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Profile</span>
                                    <span>
                                        <span class="badge badge-pill badge-warning">1</span>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Log Out</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo">
                            <i class="mdi mdi-album"></i>
                            <span>
                                TIENDA VIRTUAL
                            </span>
                        </a>
                    </div>
                    
                    <?php
                    wp_nav_menu(
                        array(
                          'theme_location' => 'header-izquierdo',
                         'container' => 'div',
                          'container_id' => 'sidebar-menu',
                          'items_wrap'=>'<ul class="metismenu list-unstyled" id="side-menu">%3$s</ul>'
                        )
                      );
                    ?>


                    <!--- Sidemenu 
                    <div id="sidebar-menu">
                     
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="has-arrow waves-effect"><i class="fas fa-home"></i><span
                                        class="badge badge-pill badge-primary float-right">7</span><span>Inicio</span></a>
                            </li>

                            <li>
                                <a href="nosotros.php" class="has-arrow waves-effect"><i
                                        class="fas fa-user"></i><span> Nosotros</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="nuestrosautos.php" class="has-arrow waves-effect"><i
                                        class="fas fa-car"></i><span> Nuestros Autos</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="fas fa-tools"></i><span>Servicio</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                  
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="contactanos.php" class="has-arrow waves-effect"><i
                                        class="fas fa-envelope"></i><span>Contactanos</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect"><i
                                        class="fas fa-check-square"></i><span
                                        class="badge badge-pill badge-danger float-right">6</span><span>Autos Vendidos</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                
                                </ul>
                            </li>

                            
                            <li class="menu-title">MÁS</li>
                                
                            

                            <li><a href="preguntas_frecuentes.php" class=" waves-effect"><i
                                class="fas fa-question-circle"></i><span>Preguntas Frecuentes?</span></a></li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="fas fa-shopping-cart"></i><span>Carrito de compra</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-invoice.html">Lista de compra</a></li>
                                    <li><a href="pages-maintenance.html">Codigo de descuento</a></li>
                                    <li><a href="pages-faqs.html">Vaciar carrito</a></li>
                                    <li><a href="pages-pricing.html">Factura</a></li>
                                    <li><a href="pages-login.html">Informacion de envio</a></li>
                                    
                                </ul>
                            </li>

                            <li><a href="calendar.html" class=" waves-effect"><i
                                        class="mdi mdi-calendar-range-outline"></i><span>Calendario</span></a></li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-map-marker-radius"></i><span>Maps</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    
                                </ul>
                            </li>       
                        </ul>
                    </div>
                    Left Menu Start -->
                </div>
            </div>

               