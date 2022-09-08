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
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a <?php if($menu == "home"){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/home">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a <?php if($menu == "produk"){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/produk">Produk PPMD</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a <?php if($menu == "syarat"){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/syarat">Syarat PPMD</a></li>                        
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a <?php if($menu == "hub"){ echo 'class="active"'; } ?> href="<?php echo base_url(); ?>/hub">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
</nav>