<?php 
    $mvc = new MvcController();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CarWash | UPV</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="views/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="views/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="views/assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="views/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="views/assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="views/assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="views/assets/css/owl-carousel/owl.theme.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="views/assets/img/logo-2.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="db-default.html" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="views/assets/img/logo-big-2.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="views/assets/img/logo-2.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        
                        <ul class="list-unstyled">
                            <span class="heading">Navegación</span>

                            <li class="active">
                                <a href="index.php?action=dashboard"><i class="la la-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class=""><a href="#dropdown-db" aria-expanded="false" data-toggle="collapse"><i class="la la-star-o"></i><span>Promociones</span></a>
                                <ul id="dropdown-db" class="collapse list-unstyled pt-0">
                                    <li><a href="#">Promociones</a></li>
                                    <li><a href="#">Premios</a></li>    
                                </ul>
                            </li>
                            
                            <li><a href="#dropdown-Us" aria-expanded="false" data-toggle="collapse"><i class="la la-users"></i><span>Usuarios</span></a>
                                <ul id="dropdown-Us" class="collapse list-unstyled pt-0">
                                    <li><a href="#">Ver Usuarios</a></li>
                                    <li><a href="#">Ver Solicitud</a></li>    
                                </ul>
                            </li>

                            <!-- Seccion del usuario -->

                            <li>
                                <a href="#"><i class="la la-map"></i>
                                    <span>Como llegar</span>
                                </a>
                            </li>

                            <li>
                                <a href="#"><i class="la la-clock-o"></i>
                                    <span>Horario</span>
                                </a>
                            </li>

                            <li>
                                <a href="#"><i class="la la-shield"></i>
                                    <span>Actualizar Contrseña</span>
                                </a>
                            </li>

                            <li>
                                <a href="#"><i class="la la-info"></i>
                                    <span>Acerca de</span>
                                </a>
                            </li>

                            <li>
                                <a href="#"><i class="la la-sign-out"></i>
                                    <span>Cerrar Sesión</span>
                                </a>
                            </li>

                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                
                <!-- Start Content -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <?php 
                            $mvc -> enlacesPaginasController();
                        ?>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>

        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="views/assets/vendors/js/base/jquery.min.js"></script>
        <script src="views/assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="views/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="views/assets/vendors/js/chart/chart.min.js"></script>
        <script src="views/assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="views/assets/vendors/js/calendar/moment.min.js"></script>
        <script src="views/assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="views/assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="views/assets/vendors/js/app/app.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="views/assets/js/dashboard/db-default-dark.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>