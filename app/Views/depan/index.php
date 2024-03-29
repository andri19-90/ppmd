<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPMD</title>
        <meta name="description" content="PPMD">
        <meta name="author" content="Rampa Praditya">
        <meta name="keyword" content="PPMD TNI AL, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/fontello.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/fonts/icon-7-stroke/css/helper.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>/depan/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/price-range.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/depan/assets/css/responsive.css">
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i><?php echo $tlp; ?></span>
                                <span><i class="pe-7s-mail"></i><?php echo $email; ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End top header -->

        
        <nav class="navbar navbar-default ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>/home"><img src="<?php echo $logo; ?>" alt="Logo"></a>
                </div>
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="login();" data-wow-delay="0.4s">Login</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="active" href="<?php echo base_url(); ?>/home">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url(); ?>/produk">Produk PPMD</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url(); ?>/syarat">Syarat PPMD</a></li>                        
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url(); ?>/hub">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <?php
                    foreach ($slider->getResult() as $row) {
                        $def_slider = base_url() . '/images/noimg.jpg';
                        if (strlen($row->gambar) > 0) {
                            if (file_exists($modul->getPathApp() . $row->gambar)) {
                                $def_slider = base_url() . '/uploads/' . $row->gambar;
                            }
                        }
                        ?>
                        <div class="item">
                            <img src="<?php echo $def_slider; ?>" alt="">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2><?php echo $judul; ?></h2>
                        <p><?php echo $subjudul; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-lager-shearch" style="padding-top: 25px; margin-top: -125px; padding-bottom: 60px; background-color: rgb(252, 252, 252);">
            <div class="container">
                <div class="col-md-12 large-search"> 
                    <div class="search-form wow pulse">
                        <form action="" class=" form-inline">
                            <div class="col-md-12 clear">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Key word">
                                </div>
                                <div class="col-md-4">                                   
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                        <option>New york, CA</option>
                                        <option>Paris</option>
                                        <option>Casablanca</option>
                                        <option>Tokyo</option>
                                        <option>Marraekch</option>
                                        <option>kyoto , shibua</option>
                                    </select>
                                </div>
                                <div class="col-md-4">                                     
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option> -Status- </option>
                                        <option>Rent </option>
                                        <option>Boy</option>
                                        <option>used</option>  

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 clear">
                                <div class="search-row">   

                                    <div class="col-sm-3">
                                        <label for="price-range">Price range ($):</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[0,450]" id="price-range" ><br />
                                        <b class="pull-left color">2000$</b> 
                                        <b class="pull-right color">100000$</b>
                                    </div>
                                    <!-- End of  -->  

                                    <div class="col-sm-3">
                                        <label for="property-geo">Property geo (m2) :</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[50,450]" id="property-geo" ><br />
                                        <b class="pull-left color">40m</b> 
                                        <b class="pull-right color">12000m</b>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <label for="price-range">Min baths :</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[250,450]" id="min-baths" ><br />
                                        <b class="pull-left color">1</b> 
                                        <b class="pull-right color">120</b>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <label for="property-geo">Min bed :</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[250,450]" id="min-bed" ><br />
                                        <b class="pull-left color">1</b> 
                                        <b class="pull-right color">120</b>
                                    </div>
                                    <!-- End of  --> 

                                </div>

                                <div class="search-row">  

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Fire Place(3100)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  -->  

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Dual Sinks(500)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Hurricane Shutters(99)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  -->  

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Swimming Pool(1190)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  -->  

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> 2 Stories(4600)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Emergency Exit(200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Laundry Room(10073)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  -->  

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Jog Path(1503)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> 26' Ceilings(1200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 
                                </div>   
                            </div>  
                            <div class="center">
                                <input type="submit" value="" class="btn btn-default btn-lg-sheach">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
            <div class="container">   
                <div class="row">
                    <div class="col-md-12  padding-top-40 properties-page">
                        <div class="col-md-12 "> 
                            <div class="col-xs-10 page-subheader sorting pl0">

                                <ul class="sort-by-list">
                                    <li class="active">
                                        <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                            Property Date <i class="fa fa-sort-amount-asc"></i>					
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                            Property Price <i class="fa fa-sort-numeric-desc"></i>						
                                        </a>
                                    </li>
                                </ul><!--/ .sort-by-list-->

                                <div class="items-per-page">
                                    <label for="items_per_page"><b>Property per page :</b></label>
                                    <div class="sel">
                                        <select id="items_per_page" name="per_page">
                                            <option value="3">3</option>
                                            <option value="6">6</option>
                                            <option value="9">9</option>
                                            <option selected="selected" value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                            <option value="45">45</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div><!--/ .sel-->
                                </div><!--/ .items-per-page-->
                            </div>

                            <div class="col-xs-2 layout-switcher">
                                <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                                <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                            </div><!--/ .layout-switcher-->
                        </div>

                        <div class="col-md-12 "> 
                            <div id="list-type" class="proerty-th">
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="<?php echo base_url(); ?>/depan/assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/bed.png">(5)|
                                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/shawer.png">(2)|
                                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="<?php echo base_url(); ?>/back/assets/img/demo/property-2.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/bed.png">(5)|
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/shawer.png">(2)|
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="<?php echo base_url(); ?>/depan/assets/img/demo/property-1.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/bed.png">(5)|
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/shawer.png">(2)|
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="<?php echo base_url(); ?>/back/assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/bed.png">(5)|
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/shawer.png">(2)|
                                                <img src="<?php echo base_url(); ?>/back/assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="<?php echo base_url(); ?>/depan/assets/img/demo/property-1.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/bed.png">(5)|
                                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/shawer.png">(2)|
                                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 
                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-3 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-1.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>


                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-12"> 
                            <div class="pull-right">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>                
                        </div>
                    </div>  
                </div>
            </div>
        </div>


        <!-- Footer area-->
        <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Hubungi Kami </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/logo4.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> Gedung B.3 Lantai 6, Mabes TNI AL - Cilangkap
                                        Jakarta Timur. 13870</li>
                                    <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Akses Cepat </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="<?php echo base_url(); ?>/home">Home</a>  </li> 
                                    <li><a href="<?php echo base_url(); ?>/syarat_ppmd">Syarat Perumahan</a>  </li> 
                                    <li><a href="<?php echo base_url(); ?>/login">Login </a></li> 
                                    <li><a href="<?php echo base_url(); ?>/page_produk">Produk PPMD</a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="http://www.KimaroTec.com">Kukuh Andriyanto</a> , All rights reserved 2022  </span> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>


        <script src="<?php echo base_url(); ?>/depan/assets/js/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/easypiechart.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/owl.carousel.min.js"></script>   
        <script src="<?php echo base_url(); ?>/depan/assets/js/wow.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/icheck.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/price-range.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/main.js"></script>
        <script type="text/javascript">
                            function login() {
                                window.location.href = "<?php echo base_url(); ?>/login";
                            }
        </script>
    </body>
</html>