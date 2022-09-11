<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Akun Baru </h1>               
            </div>
        </div>
    </div>
</div>
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
        <div class="col-md-12">
            <div class="box-for overflow">                         
                <div class="col-md-6 col-xs-6 login-blocks">
                    <div style="text-align: center; margin-top: 100px;" class="vertical-center">
                        <img src="<?php echo $logo; ?>" style="width: 150px; height: auto;">
                        <h6 style="margin-top: 20px;">DINAS PERAWATAN PERSONEL ANGKATAN LAUT</h6>
                        <p>" Kesejahteraan Personel Angkatan Laut itu yang utama "</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 login-blocks">
                    <h2>Register : </h2> 
                    <form id="form">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="nrp">NRP</label>
                                    <input type="text" class="form-control" id="nrp" name="nrp" autofocus autocomplete="off">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" id="pass" name="pass">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="korps">Korps</label>
                                    <select id="korps" name="korps" class="form-control">
                                        <option value="-">- PILIH -</option>
                                        <?php
                                        foreach ($korps->getResult() as $row) {
                                            ?>
                                        <option value="<?php echo $row->idkorps; ?>"><?php echo $row->nama_korps; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="pangkat">Pangkat</label>
                                    <select id="pangkat" name="pangkat" class="form-control">
                                        <option value="-">- PILIH -</option>
                                        <?php
                                        foreach ($pangkat->getResult() as $row) {
                                            ?>
                                        <option value="<?php echo $row->idpangkat; ?>"><?php echo $row->nama_pangkat; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <button id="btnProses" type="button" class="btn btn-default" onclick="prosesregis();"> Register</button>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo base_url(); ?>/login">Sudah punya akun ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<script type="text/javascript">

    $(document).ready(function () {

    });

    function prosesregis() {
        var nrp = document.getElementById('nrp').value;
        var pass = document.getElementById('pass').value;
        var nama = document.getElementById('nama').value;
        var email = document.getElementById('email').value;
        var korps = document.getElementById('korps').value;
        var pangkat = document.getElementById('pangkat').value;

        if (nrp === "") {
            alert("NRP tidak boleh kosong");
        } else if (pass === "") {
            alert("Password tidak boleh kosong");
        } else if (nama === "") {
            alert("Nama tidak boleh kosong");
        } else if (email === "") {
            alert("Email tidak boleh kosong");
        } else if (korps === "-") {
            alert("Pilih korps terlebih dahulu");
        } else if (pangkat === "-") {
            alert("Pilih pangkat terlebih dahulu");
        } else {
            $('#btnProses').text('Prosessing...');
            $('#btnProses').attr('disabled', true);

            $.ajax({
                url: "<?php echo base_url(); ?>/register/proses",
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function (response) {
                    alert(response.status);            
                    $('#btnProses').text('Register');
                    $('#btnProses').attr('disabled', false);
                }, error: function (response) {
                    alert(response.status);
                    $('#btnProses').text('Register');
                    $('#btnProses').attr('disabled', false);
                }
            });
        }
    }

</script>