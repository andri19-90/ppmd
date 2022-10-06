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
                            <input type="text" class="form-control" placeholder="Perumahan" id="nama_perum" name="nama_perum" autocomplete="off">
                        </div>
                        <div class="col-md-4">                                   
                            <select id="kota" name="kota" class="form-control" data-live-search="true" data-live-search-style="begins" title="Pilih Kota">
                                <?php
                                foreach ($kota->getResult() as $row) {
                                    ?>
                                <option><?php echo $row->kota; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 clear">
                        <div class="search-row">   
                            <div class="col-sm-3">
                                <label for="price-range">Harga (Rp):</label>
                                <input type="text" class="span2" value="" data-slider-min="<?php echo $min_harga; ?>" 
                                       data-slider-max="<?php echo $max_harga; ?>" data-slider-step="1" 
                                       data-slider-value="[<?php echo $min_harga; ?>,<?php echo $max_harga; ?>]" id="price-range" ><br />
                                <b class="pull-left color"><?php echo "Rp. ".number_format($min_harga); ?></b> 
                                <b class="pull-right color"><?php echo "Rp. ".number_format($max_harga); ?></b>
                            </div>
                            <div class="col-sm-3">
                                <label for="property-geo">Area (m<sup>2</sup>)</label>
                                <input type="text" class="span2" value="" data-slider-min="<?php echo $min_area; ?>" 
                                       data-slider-max="<?php echo $max_area; ?>" data-slider-step="1" 
                                       data-slider-value="[<?php echo $min_area; ?>,<?php echo $max_area; ?>]" id="property-geo"><br />
                                <b class="pull-left color"><?php echo $min_area; ?> M<sup>2</sup></b> 
                                <b class="pull-right color"><?php echo $max_area; ?> M<sup>2</sup></b>
                            </div>
                            <div class="col-sm-2">
                                <label for="min-bed">Kamar Tidur</label>
                                <input type="text" class="span2" value="" data-slider-min="<?php echo $min_bed; ?>" 
                                       data-slider-max="<?php echo $max_bed; ?>" 
                                       data-slider-step="1"  data-slider-value="[<?php echo $min_bed; ?>,<?php echo $max_bed; ?>]" id="min-bed"><br />
                                <b class="pull-left color"><?php echo $min_bed; ?></b> 
                                <b class="pull-right color"><?php echo $max_bed; ?></b>
                            </div>
                            <div class="col-sm-2">
                                <label for="min-baths">Kamar Mandi</label>
                                <input type="text" class="span2" value="" data-slider-min="<?php echo $min_bath; ?>" 
                                       data-slider-max="<?php echo $max_bath; ?>" data-slider-step="1" 
                                       data-slider-value="[<?php echo $min_bath; ?>,<?php echo $max_bath; ?>]" id="min-baths" ><br />
                                <b class="pull-left color"><?php echo $min_bath; ?></b> 
                                <b class="pull-right color"><?php echo $max_bath; ?></b>
                            </div>
                            <!-- End of  --> 

                        </div>

                        <div class="search-row">  
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Fire Place</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Wastafel
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Swimming Pool
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Emergency Exit</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Laundry Room
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Jog Path
                                    </label>
                                </div>
                            </div>
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