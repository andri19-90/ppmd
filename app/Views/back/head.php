<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
    <head>
        <title>PPMD</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
        <meta name="keywords" content="PPMD, Perumahan Dinas TNI AL">
        <meta name="author" content="https://pramediaenginering.com/" />
        <link rel="icon" type="image/x-icon" href="<?php echo $logo; ?>">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/fontawesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/ionicons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/linearicons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/open-iconic.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/feather.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/css/bootstrap-material.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/css/shreerang-material.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/css/uikit.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/libs/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/libs/datatables/datatables.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/libs/bootstrap-sweetalert/bootstrap-sweetalert.css">
        <style>
            .vertical-center {
                margin: 0;
                position: absolute;
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }
        </style>
        <script src="<?php echo base_url(); ?>/back/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/tinymce/tinymce.min.js"></script>
        
        <script type="text/javascript">
            
            function back(){
                window.history.back();
            }
            
            function hanyaAngka(e, decimal) {
                var key;
                var keychar;
                if (window.event) {
                    key = window.event.keyCode;
                } else if (e) {
                    key = e.which;
                } else {
                    return true;
                }
                keychar = String.fromCharCode(key);
                if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
                    return true;
                } else if ((("0123456789").indexOf(keychar) > -1)) {
                    return true;
                } else if (decimal && (keychar == ".")) {
                    return true;
                } else {
                    return false;
                }
            }
            
            function batas_angka(input, batas) {
                if (input.value < 0){ input.value = 0;}
                if (input.value > batas) {input.value = batas;}
            }
        </script>
        
    </head>

    <body>
        <div class="page-loader">
            <div class="bg-primary"></div>
        </div>

        <div class="layout-wrapper layout-2">
            <div class="layout-inner">
                <!-- [ Layout sidenav ] Start -->
                <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark logo-dark">
                    <div class="app-brand">
                        <span class="app-brand-logo">
                            <!--<img src="<?php // echo $logo; ?>" alt="Brand Logo" class="img-fluid" style="width: 45px; height: auto;">-->
                        </span>
                        <a href="<?php echo base_url(); ?>/beranda" class="app-brand-text sidenav-text font-weight-normal ml-2">PPMD</a>
                        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                            <i class="ion ion-md-menu align-middle"></i>
                        </a>
                    </div>
                    <div class="sidenav-divider mt-0"></div>
                    <ul class="sidenav-inner py-1">
                        <li class="sidenav-item <?php if($menu == "slider" || $menu == "beranda" || $menu == "identitas" || $menu == "profile" || $menu == "gantipass" || $menu == "syaratumum" || $menu == "syaratkhusus" || $menu == "peta" || $menu == "kotakmasuk" || $menu == "mediasosial") { echo 'active open'; } ?>">
                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                <i class="sidenav-icon feather icon-home"></i>
                                <div>Dashboards</div>
                            </a>
                            <ul class="sidenav-menu">
                                <li class="sidenav-item <?php if($menu == "beranda") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/beranda" class="sidenav-link">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "identitas") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/identitas" class="sidenav-link">
                                        <div>Identitas</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "profile") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/profile" class="sidenav-link">
                                        <div>Profil Saya</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "gantipass") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/gantipass" class="sidenav-link">
                                        <div>Ganti Password</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "slider") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/slider" class="sidenav-link">
                                        <div>Slider</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "syaratumum") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/syaratumum" class="sidenav-link">
                                        <div>Syarat Umum</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "syaratkhusus") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/syaratkhusus" class="sidenav-link">
                                        <div>Syarat Khusus</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "peta") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/peta" class="sidenav-link">
                                        <div>Embeded Peta</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "kotakmasuk") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/kotakmasuk" class="sidenav-link">
                                        <div>Kotak Masuk</div>
                                    </a>
                                </li>
                                <li class="sidenav-item <?php if($menu == "mediasosial") { echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>/mediasosial" class="sidenav-link">
                                        <div>Media Sosial</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item <?php if($menu == "hakakses" || $menu == "vendor" || $menu == "korps" || $menu == "pangkat") { echo 'active open'; } ?>">
                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                <i class="sidenav-icon feather icon-layers"></i>
                                <div>Master</div>
                            </a>
                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="<?php echo base_url(); ?>/hakakses" class="sidenav-link">
                                        <div>Hak Akses</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="<?php echo base_url(); ?>/korps" class="sidenav-link">
                                        <div>Korps</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="<?php echo base_url(); ?>/pangkat" class="sidenav-link">
                                        <div>Pangkat</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="<?php echo base_url(); ?>/pengguna" class="sidenav-link">
                                        <div>Pengguna</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="<?php echo base_url(); ?>/vendor" class="sidenav-link">
                                        <div>Vendor Perumahan</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                <i class="sidenav-icon feather icon-layout"></i>
                                <div>Transaksi</div>
                            </a>
                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="layouts_sidenav_dark.html" class="sidenav-link" target="_blank">
                                        <div>Navbar dark</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="layouts_header_dark.html" class="sidenav-link" target="_blank">
                                        <div>Header dark</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="layouts_light.html" class="sidenav-link" target="_blank">
                                        <div>Light layout</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="layouts_horizontal.html" class="sidenav-link" target="_blank">
                                        <div>Horizontal</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- [ Layout sidenav ] End -->
                <!-- [ Layout container ] Start -->
                <div class="layout-container">
                    <!-- [ Layout navbar ( Header ) ] Start -->
                    <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                        <!-- Brand demo (see assets/css/demo/demo.css) -->
                        <a href="<?php echo base_url(); ?>/beranda" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                            <span class="app-brand-logo demo">
                                <!--<img src="<?php // echo $logo; ?>" alt="Brand Logo" class="img-fluid" style="width: 30px;">-->
                            </span>
                            <span class="app-brand-text demo font-weight-normal ml-2">PPMD</span>
                        </a>

                        <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                        <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                            <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                                <i class="ion ion-md-menu text-large align-middle"></i>
                            </a>
                        </div>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                            <!-- Divider -->
                            <hr class="d-lg-none w-100 my-2">

                            <div class="navbar-nav align-items-lg-center">
                                <!-- Search -->
                                <!--
                                <label class="nav-item navbar-text navbar-search-box p-0 active">
                                    <i class="feather icon-search navbar-icon align-middle"></i>
                                    <span class="navbar-search-input pl-2">
                                        <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                    </span>
                                </label>
                                -->
                            </div>

                            <div class="navbar-nav align-items-lg-center ml-auto">
                                

                                <!-- Divider -->
                                <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                                <div class="demo-navbar-user nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                            <img src="<?php echo $foto_profile; ?>" alt class="d-block ui-w-30 rounded-circle" style="width: 30px; height: 30px;">
                                            <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?php echo $nama; ?></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="<?php echo base_url(); ?>/profile" class="dropdown-item">
                                            <i class="feather icon-user text-muted"></i> &nbsp; Profil Saya
                                        </a>
                                        <a href="<?php echo base_url(); ?>/gantipass" class="dropdown-item">
                                            <i class="feather icon-settings text-muted"></i> &nbsp; Ganti Password
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?php echo base_url(); ?>/login/logout" class="dropdown-item"><i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="layout-content">