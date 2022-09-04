<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
    <head>
        <title>PPDM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
        <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
        <meta name="author" content="Codedthemes" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

        <!-- Icon fonts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/fontawesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/ionicons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/linearicons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/open-iconic.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/fonts/feather.css">

        <!-- Core stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/css/bootstrap-material.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/css/shreerang-material.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/css/uikit.css">

        <!-- Libs -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/libs/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/back/assets/libs/morris/morris.css">
        
        <script src="<?php echo base_url(); ?>/back/assets/js/jquery-3.3.1.min.js"></script>
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
                            <img src="<?php echo $logo; ?>" alt="Brand Logo" class="img-fluid" style="width: 45px; height: 45px;">
                        </span>
                        <a href="<?php echo base_url(); ?>/beranda" class="app-brand-text sidenav-text font-weight-normal ml-2">PPMD</a>
                        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                            <i class="ion ion-md-menu align-middle"></i>
                        </a>
                    </div>
                    <div class="sidenav-divider mt-0"></div>
                    <ul class="sidenav-inner py-1">
                        <li class="sidenav-item active open">
                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                <i class="sidenav-icon feather icon-home"></i>
                                <div>Dashboards</div>
                            </a>
                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="index.html" class="sidenav-link">
                                        <div>Default</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="dashboards_ecommerce.html" class="sidenav-link">
                                        <div>Ecommerce</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="dashboards_analytics.html" class="sidenav-link">
                                        <div>Analytics</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="dashboards_crypto.html" class="sidenav-link">
                                        <div>Crypto</div>
                                        <div class="pl-1 ml-auto">
                                            <div class="badge badge-danger">New</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidenav-item active">
                                    <a href="dashboards_project.html" class="sidenav-link">
                                        <div>Project</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidenav-item">
                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                <i class="sidenav-icon feather icon-layers"></i>
                                <div>Master</div>
                            </a>
                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="w-simple.html" class="sidenav-link">
                                        <div>Simple</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="w-data.html" class="sidenav-link">
                                        <div>Data</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="w-social.html" class="sidenav-link">
                                        <div>Social</div>
                                    </a>
                                </li>
                                <li class="sidenav-item">
                                    <a href="w-chart.html" class="sidenav-link">
                                        <div>Chart</div>
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
                        <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                            <span class="app-brand-logo demo">
                                <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                            </span>
                            <span class="app-brand-text demo font-weight-normal ml-2">Empire</span>
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
                                <label class="nav-item navbar-text navbar-search-box p-0 active">
                                    <i class="feather icon-search navbar-icon align-middle"></i>
                                    <span class="navbar-search-input pl-2">
                                        <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                    </span>
                                </label>
                            </div>

                            <div class="navbar-nav align-items-lg-center ml-auto">
                                <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                        <i class="feather icon-bell navbar-icon align-middle"></i>
                                        <span class="badge badge-danger badge-dot indicator"></span>
                                        <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="bg-primary text-center text-white font-weight-bold p-3">
                                            4 New Notifications
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                                <div class="media-body line-height-condenced ml-3">
                                                    <div class="text-dark">Login from 192.168.1.1</div>
                                                    <div class="text-light small mt-1">
                                                        Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                    </div>
                                                    <div class="text-light small mt-1">12h ago</div>
                                                </div>
                                            </a>

                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <div class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white"></div>
                                                <div class="media-body line-height-condenced ml-3">
                                                    <div class="text-dark">You have
                                                        <strong>4</strong> new followers</div>
                                                    <div class="text-light small mt-1">
                                                        Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                                <div class="media-body line-height-condenced ml-3">
                                                    <div class="text-dark">Server restarted</div>
                                                    <div class="text-light small mt-1">
                                                        19h ago
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                                <div class="media-body line-height-condenced ml-3">
                                                    <div class="text-dark">99% server load</div>
                                                    <div class="text-light small mt-1">
                                                        Etiam nec fringilla magna. Donec mi metus.
                                                    </div>
                                                    <div class="text-light small mt-1">
                                                        20h ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                                    </div>
                                </div>

                                <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                        <i class="feather icon-mail navbar-icon align-middle"></i>
                                        <span class="badge badge-success badge-dot indicator"></span>
                                        <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="bg-primary text-center text-white font-weight-bold p-3">
                                            4 New Messages
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                                <div class="media-body ml-3">
                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                                    <div class="text-light small mt-1">
                                                        Josephin Doe &nbsp;·&nbsp; 58m ago
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                                <div class="media-body ml-3">
                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                                    <div class="text-light small mt-1">
                                                        Lary Doe &nbsp;·&nbsp; 1h ago
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                                <div class="media-body ml-3">
                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                                    <div class="text-light small mt-1">
                                                        Alice &nbsp;·&nbsp; 2h ago
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                                <div class="media-body ml-3">
                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                                    <div class="text-light small mt-1">
                                                        Suzen &nbsp;·&nbsp; 5h ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                    </div>
                                </div>

                                <!-- Divider -->
                                <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                                <div class="demo-navbar-user nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                            <img src="<?php echo base_url(); ?>/back/assets/img/avatars/1.png" alt class="d-block ui-w-30 rounded-circle">
                                            <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Cindy Deitch</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:" class="dropdown-item">
                                            <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                                        <a href="javascript:" class="dropdown-item">
                                            <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                        <a href="javascript:" class="dropdown-item">
                                            <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?php echo base_url(); ?>/login/logout" class="dropdown-item"><i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- [ Layout navbar ( Header ) ] End -->

                    <!-- [ Layout content ] Start -->
                    <div class="layout-content">

                        <!-- [ content ] Start -->
                        <div class="container-fluid flex-grow-1 container-p-y">

                            <h4 class="font-weight-bold py-3 mb-0">Project</h4>
                            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" >Data</li>
                                </ol>
                            </div>
                            <div class="row">
                                <!-- first card start -->
                                <!-- Staustic card 11 Start -->
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5>Open Ticket</h5>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <label class="badge badge-pill badge-primary">35% <i class="m-l-10 feather icon-arrow-up"></i></label>
                                                </div>
                                                <div class="col text-right">
                                                    <h5 class="mb-0">35</h5>
                                                </div>
                                            </div>
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-primary" style="width:35%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5>Completed Task</h5>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <label class="badge badge-pill badge-success">85% <i class="m-l-10 feather icon-arrow-down"></i></label>
                                                </div>
                                                <div class="col text-right">
                                                    <h5 class="mb-0">1 Remain</h5>
                                                </div>
                                            </div>
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-success" style="width:85%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5>Space Remain</h5>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <label class="badge badge-pill badge-danger">8% <i class="m-l-10 feather icon-arrow-down"></i></label>
                                                </div>
                                                <div class="col text-right">
                                                    <h5 class="mb-0">15 BG</h5>
                                                </div>
                                            </div>
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-danger" style="width:15%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5>New Followers</h5>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <label class="badge badge-pill text-white badge-warning">15% <i class="m-l-10 feather icon-arrow-down"></i></label>
                                                </div>
                                                <div class="col text-right">
                                                    <h5 class="mb-0">55+</h5>
                                                </div>
                                            </div>
                                            <div class="progress mt-1">
                                                <div class="progress-bar bg-warning" style="width:35%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- forth card start -->
                                <div class="col-xl-12 col-md-12">
                                    <div class="card mb-4">
                                        <h5 class="card-header">Recent Tickets</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Subject</th>
                                                        <th>Department</th>
                                                        <th class="text-right">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-success">open</label></td>
                                                        <td>Website down for one week</td>
                                                        <td>Support</td>
                                                        <td class="text-right">Today 2:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td class="text-right">Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-danger">closed</label></td>
                                                        <td>Authorizations keys</td>
                                                        <td>Support</td>
                                                        <td class="text-right">27, Aug</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td class="text-right">Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td class="text-right">Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td class="text-right">Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="badge badge-pill badge-danger">closed</label></td>
                                                        <td>Authorizations keys</td>
                                                        <td>Support</td>
                                                        <td class="text-right">27, Aug</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- [ content ] End -->

                        <!-- [ Layout footer ] Start -->
                        <nav class="layout-footer footer footer-light">
                            <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                                <div class="pt-3">
                                    <span class="float-md-right d-none d-lg-block">&copy; PPMD 2022 </span>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core scripts -->
        <script src="<?php echo base_url(); ?>/back/assets/js/pace.js"></script>
        
        <script src="<?php echo base_url(); ?>/back/assets/libs/popper/popper.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/js/sidenav.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/js/layout-helpers.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/js/material-ripple.js"></script>

        <!-- Libs -->
        <script src="<?php echo base_url(); ?>/back/assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/libs/eve/eve.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/libs/raphael/raphael.js"></script>
        <script src="<?php echo base_url(); ?>/back/assets/libs/morris/morris.js"></script>

        <!-- Demo -->
        
        <script src="<?php echo base_url(); ?>/back/assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
        
        <script src="<?php echo base_url(); ?>/back/assets/js/pages/dashboards_project.js"></script>
    </body>
</html>
