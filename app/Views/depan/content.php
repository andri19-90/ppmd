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
                        <?php
                        foreach ($produk->getResult() as $row) {
                            $img_home = base_url().'/images/noimg.jpg';
                            if(strlen($row->gambar) > 0){
                                if(file_exists($modul->getPathApp().$row->gambar)){
                                    $img_home = base_url().'/uploads/'.$row->gambar;
                                }
                            }
                            ?>
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="<?php echo base_url(); ?>/produk/detil/<?php echo $modul->enkrip_url($row->idproduk); ?>" ><img src="<?php echo $img_home; ?>"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="<?php echo base_url(); ?>/produk/detil/<?php echo $modul->enkrip_url($row->idproduk); ?>"> <?php echo $row->nama_produk; ?> </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> <?php echo $row->area; ?> m<sup>2</sup> </span>
                                    <span class="proerty-price pull-right"> Rp. <?php echo number_format($row->harga); ?></span>
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