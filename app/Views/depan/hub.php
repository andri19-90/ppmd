<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"><strong>Hubungi Kami</strong></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
    <div class="container">  
        <div class="row">
            <div class="col-md-12 col-md-offset-0"> 
                <div class="" id="contact1">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3><i class="fa fa-map-marker"></i> Alamat</h3>
                            <p><?php echo $alamat; ?></p>
                        </div>
                        <div class="col-sm-4">
                            <h3><i class="fa fa-phone"></i> Nomor Telepon</h3>
                            <p class="text-muted">Silahkankan hubungi kami menggunakan nomor ini untuk mendapatkan informasi mengenai PPMD TNI AL</p>
                            <p><strong><?php echo $tlp; ?></strong></p>
                        </div>
                        <div class="col-sm-4">
                            <h3><i class="fa fa-envelope"></i> Email</h3>
                            <p class="text-muted">Silahkan kirim email ke kami untuk informasi lebih lanjut.</p>
                            <ul>
                                <li><strong><a href="<?php echo $email; ?>"><?php echo $email; ?></a></strong></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div id="map">
                        
                    </div>
                    <hr>
                    <h2>Contact form</h2>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Nama Depan</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Nama Belakang</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Pesan</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>