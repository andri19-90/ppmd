<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"><?php echo $head->nama_produk; ?></h1>               
            </div>
        </div>
    </div>
</div>
<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   

        <div class="clearfix padding-top-40" >

            <div class="col-md-8 single-property-content prp-style-1 ">
                <div class="row">
                    <div class="light-slide-item">            
                        <div class="clearfix">
                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i> 
                                </a>
                            </div> 
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <?php
                                foreach ($gambarlain->getResult() as $row) {
                                    $logo = base_url().'/images/noimg.jpg';
                                    if(strlen($row->gambar) > 0){
                                        if(file_exists($modul->getPathApp().$row->gambar)){
                                            $logo = base_url().'/uploads/'.$row->gambar;
                                        }
                                    }
                                    ?>
                                <li data-thumb="<?php echo $logo; ?>"> 
                                    <img src="<?php echo $logo; ?>" />
                                </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="single-property-wrapper">
                    <div class="row">
                        <div class="col-md-12" style="text-align: right; margin-bottom: 20px;">
                            <input class="btn btn-primary" value="Pengajuan" type="button" style="width: 30%;" onclick="ajukan();">
                        </div>
                    </div>
                    <div class="single-property-header">
                        <h1 class="property-title pull-left"><?php echo $head->nama_produk; ?></h1>
                        <span class="property-price pull-right"><?php echo "Rp." .number_format($head->harga); ?></span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">   
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Area</span>
                                <span class="property-info-value"><?php echo $head->area; ?><b class="property-info-unit">M<sup>2</sup></b></span>
                            </span>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/bed-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Bedrooms</span>
                                <span class="property-info-value"><?php echo $head->jml_bed; ?></span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/cars-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Car garages</span>
                                <span class="property-info-value"><?php echo $head->car_port; ?></span>
                            </span>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="<?php echo base_url(); ?>/depan/assets/img/icon/shawer-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Bathrooms</span>
                                <span class="property-info-value"><?php echo $head->jml_bath; ?></span>
                            </span>
                        </div>
                    </div>
                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p><?php echo $head->deskripsi_singkat; ?></p>
                        </div>
                    </div> 
                    <div class="section property-video"> 
                        <h4 class="s-property-title">Property Video</h4> 
                        <div class="video-thumb">
                            <a class="video-popup" href="https://youtu.be/OXWgaB03Xig" title="Virtual Tour">
                                <img src="<?php echo base_url(); ?>/depan/assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">
                            </a>
                        </div>
                    </div>
                    <!--
                    <div class="section property-share"> 
                        <h4 class="s-property-title">Share width your friends </h4> 
                        <div class="roperty-social">
                            <ul> 
                                <li><a title="Share this on facebok " href="#"><img src="<?php // echo base_url(); ?>/depan/assets/img/social_big/facebook_grey.png"></a></li> 
                                <li><a title="Share this on digg " href="#"><img src="<?php // echo base_url(); ?>/depan/assets/img/social_big/digg_grey.png"></a></li> 
                                <li><a title="Share this on twitter " href="#"><img src="<?php // echo base_url(); ?>/depan/assets/img/social_big/twitter_grey.png"></a></li> 
                            </ul>
                        </div>
                    </div>
                    -->
                </div>
            </div>


            <div class="col-md-4 p0">
                <aside class="sidebar sidebar-property blog-asside-right">
                    <div class="dealer-widget">
                        <div class="dealer-content">
                            <div class="inner-wrapper">

                                <div class="clear">
                                    <div class="col-xs-4 col-sm-4 dealer-face">
                                        <a href="">
                                            <img src="<?php echo $logo_vendor; ?>" class="img-circle">
                                        </a>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 ">
                                        <h3 class="dealer-name">
                                            <a href=""><?php echo $vendor->namavendor; ?></a>
                                            <br>
                                            <span>Real Estate Vendor</span>        
                                        </h3>
                                        <div class="dealer-social-media">
                                            <?php
                                            if(strlen($tw) > 0){
                                                ?>
                                            <a class="twitter" target="_blank" href="<?php echo $tw; ?>"><i class="fa fa-twitter"></i></a>
                                                <?php
                                            }
                                            
                                            if(strlen($fb) > 0){
                                                ?>
                                            <a class="facebook" target="_blank" href="<?php echo $fb; ?>"><i class="fa fa-facebook"></i></a>
                                                <?php
                                            }
                                            
                                            if(strlen($gp) > 0){
                                                ?>
                                            <a class="gplus" target="_blank" href="<?php echo $gp; ?>"><i class="fa fa-google-plus"></i></a>
                                                <?php
                                            }
                                            
                                            if(strlen($lk) > 0){
                                                ?>
                                            <a class="linkedin" target="_blank" href="<?php echo $lk; ?>"><i class="fa fa-linkedin"></i></a> 
                                                <?php
                                            }
                                            
                                            if(strlen($ig) > 0){
                                                ?>
                                            <a class="instagram" target="_blank" href="<?php echo $ig; ?>"><i class="fa fa-instagram"></i></a>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">                                       
                                        <li><i class="pe-7s-map-marker strong"> </i> <?php echo $vendor->alamat; ?></li>
                                        <li><i class="pe-7s-mail strong"> </i> <?php echo $vendor->email; ?></li>
                                        <li><i class="pe-7s-call strong"> </i> <?php echo $vendor->tlp; ?></li>
                                    </ul>
                                    <p><?php echo $vendor->deskripsi; ?></p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Rekomendasi</h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                            <ul>
                                <?php
                                foreach ($properti_lain->getResult() as $row) {
                                    $logo = base_url().'/images/noimg.jpg';
                                    if(strlen($row->gambar) > 0){
                                        if(file_exists($modul->getPathApp().$row->gambar)){
                                            $logo = base_url().'/uploads/'.$row->gambar;
                                        }
                                    }
                                    ?>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="<?php echo $logo; ?>"></a>
                                        <span class="property-seeker">
                                            <b class="b-1"><?php echo $row->area; ?> M <sup>2</sup></b>
                                            <!--
                                            <b class="b-2">S</b>
                                            -->
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html"><?php echo $row->nama_produk; ?></a></h6>
                                        <span class="property-price"><?php echo 'Rp.'. number_format($row->harga); ?></span>
                                    </div>
                                </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Pencarian</h3>
                        </div>
                        <div class="panel-body search-widget">
                            <form action="" class=" form-inline"> 
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" placeholder="Key word">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">
                                                <option>New york, CA</option>
                                                <option>Paris</option>
                                                <option>Casablanca</option>
                                                <option>Tokyo</option>
                                                <option>Marraekch</option>
                                                <option>kyoto , shibua</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> -Status- </option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>  

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Price range ($):</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[0,450]" id="price-range" ><br />
                                            <b class="pull-left color">2000$</b> 
                                            <b class="pull-right color">100000$</b>                                                
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="property-geo">Property geo (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[50,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>                                                
                                        </div>                                            
                                    </div>
                                </fieldset>                                

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Min baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>                                                
                                        </div>

                                        <div class="col-xs-6">
                                            <label for="property-geo">Min bed :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Fire Place</label>
                                            </div> 
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Dual Sinks</label>
                                            </div>
                                        </div>                                            
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Swimming Pool</label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> 2 Stories </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Laundry Room </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Emergency Exit</label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox" checked> Jog Path </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox"> 26' Ceilings </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-12"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox"> Hurricane Shutters </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>

                                <fieldset >
                                    <div class="row">
                                        <div class="col-xs-12">  
                                            <input class="button btn largesearch-btn" value="Search" type="submit">
                                        </div>  
                                    </div>
                                </fieldset>                                     
                            </form>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {

    });

    function ajukan() {
        // cek sudah login apa belum
        
        window.location.href = "<?php echo base_url(); ?>/ajukan";
    }

</script>