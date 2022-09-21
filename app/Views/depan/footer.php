        <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Hubungi Kami </h4>
                                <div class="footer-title-line"></div>
                                <img src="<?php echo $logo; ?>" alt="" class="wow pulse" data-wow-delay="1s">
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"></i><?php echo $alamat; ?></li>
                                    <li><i class="pe-7s-mail strong"> </i> <?php echo $email; ?></li>
                                    <li><i class="pe-7s-call strong"> </i> <?php echo $tlp; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Akses Cepat </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="<?php echo base_url(); ?>/home">Home</a>  </li> 
                                    <li><a href="<?php echo base_url(); ?>/syarat">Syarat PPMD</a>  </li> 
                                    <li><a href="<?php echo base_url(); ?>/login">Login </a></li> 
                                    <li><a href="<?php echo base_url(); ?>/produk">Produk PPMD</a></li> 
                                    <li><a href="<?php echo base_url(); ?>/hub">Hubungi Kami</a></li> 
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
                            <span> (C) <a href="https://pramediaenginering.com/">Kukuh Andriyanto</a> , All rights reserved 2022  </span> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>


        <script src="<?php echo base_url(); ?>/depan/assets/js/modernizr-2.6.2.min.js"></script>
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
        <script src="<?php echo base_url(); ?>/depan/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>/depan/assets/js/wizard.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });

            function proses(){
                var email = document.getElementById('email').value;
                var pass = document.getElementById('pass').value;

                if(email === ""){
                    alert("Email tidak boleh kosong");
                }else if(pass === ""){
                    alert("Password lama tidak boleh kosong");
                }else{
                    $('#btnProses').text('Prosessing...');
                    $('#btnProses').attr('disabled',true);

                    var form_data = new FormData();
                    form_data.append('email', email);
                    form_data.append('pass', pass);

                    $.ajax({
                        url: "<?php echo base_url(); ?>/login/proses",
                        dataType: 'JSON',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'POST',
                        success: function (response) {
                            $('#btnProses').text('Sign In');
                            $('#btnProses').attr('disabled', false);

                            if(response.status === "ok"){
                                window.location.href = "<?php echo base_url(); ?>/beranda";
                            }else{
                                alert(response.status);
                            }

                        },error: function (response) {
                            alert(response.status);
                            $('#btnProses').text('Sign In');
                            $('#btnProses').attr('disabled', false);
                        }
                    });
                }
            }

            function login() {
                window.location.href = "<?php echo base_url(); ?>/login";
            }
            
        </script>
    </body>
</html>