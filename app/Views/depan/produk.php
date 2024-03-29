<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Produk PPMD</h1>               
            </div>
        </div>
    </div>
</div>
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">   
        <div class="row">
            <div class="col-md-9 padding-top-40 properties-page">
                <div class="section clear"> 
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

                <div class="section clear"> 
                    <div id="list-type" class="proerty-th">
                        <?php
                        foreach ($produk->getResult() as $row) {
                            $img_home = base_url().'/images/noimg.jpg';
                            if(strlen($row->gambar) > 0){
                                if(file_exists($modul->getPathApp().$row->gambar)){
                                    $img_home = base_url().'/uploads/'.$row->gambar;
                                }
                            }
                            ?>
                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="<?php echo base_url(); ?>/produk/detil/<?php echo $modul->enkrip_url($row->idproduk); ?>" ><img src="<?php echo $img_home; ?>"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="<?php echo base_url(); ?>/produk/detil/<?php echo $modul->enkrip_url($row->idproduk); ?>"> <?php echo $row->nama_produk; ?> </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> <?php echo $row->area; ?>m<sup>2</sup> </span>
                                    <span class="proerty-price pull-right"> Rp <?php echo number_format($row->harga); ?></span>
                                    <p style="display: none;"><?php //echo $row->deskripsi_singkat; ?></p>
                                    <div class="property-icon">
                                        <img src="<?php echo base_url(); ?>/depan/assets/img/icon/bed.png">(<?php echo $row->jml_bed; ?>)|
                                        <img src="<?php echo base_url(); ?>/depan/assets/img/icon/shawer.png">(<?php echo $row->jml_bath; ?>)|
                                        <img src="<?php echo base_url(); ?>/depan/assets/img/icon/cars.png">(<?php echo $row->car_port; ?>)  
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="section">
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
            <div class="col-md-3 pl0 padding-top-40">
                <div class="blog-asside-right pl0">
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
                                        <div class="col-xs-12">
                                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">
                                                <option>New york, CA</option>
                                                <option>Paris</option>
                                                <option>Casablanca</option>
                                                <option>Tokyo</option>
                                                <option>Marraekch</option>
                                                <option>kyoto , shibua</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Batas Harga (Rp):</label>
                                            <input type="text" class="span2" value="" data-slider-min="0"  
                                                   data-slider-max="600" 
                                                   data-slider-step="5" data-slider-value="[0,450]" id="price-range" >
                                            <br />
                                            <b class="pull-left color">2000$</b> 
                                            <b class="pull-right color">100000$</b>                                                
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="property-geo">Area (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[0,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>                                                
                                        </div>                                            
                                    </div>
                                </fieldset>                                

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Kamar Mandi :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="10" data-slider-step="1" 
                                                   data-slider-value="[0,5]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">10</b>                                                
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
                                                <label> <input type="checkbox" checked> Pemadam Api</label>
                                            </div> 
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Wastafel</label>
                                            </div>
                                        </div>                                            
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-12"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Swimming Pool</label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>
                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-12"> 
                                            <div class="checkbox">
                                                <label>  <input type="checkbox" checked> Jogging Track </label>
                                            </div>
                                        </div>  
                                    </div>
                                </fieldset>
                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Laundry </label>
                                            </div>
                                        </div>  
                                        <div class="col-xs-6"> 
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Emergency</label>
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
                </div>
            </div>
        </div>           
    </div>
</div>