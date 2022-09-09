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
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $txtpeta; ?>
                        </div>
                    </div>
                    <hr>
                    <h2>Contact form</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nm_depan">Nama Depan</label>
                                <input type="text" class="form-control" id="nm_depan" name="nm_depan">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nm_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" id="nm_belakang" name="nm_belakang">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jdl">Subject</label>
                                <input type="text" class="form-control" id="jdl" name="jdl">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea id="pesan" name="pesan" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button id="btnProses" type="button" class="btn btn-primary" onclick="kirimpesan()">
                                <i class="fa fa-envelope-o"></i> Kirim Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

    });

    function kirimpesan(){

        var nm_depan = document.getElementById('nm_depan').value;
        var nm_belakang = document.getElementById('nm_belakang').value;
        var email = document.getElementById('email').value;
        var jdl = document.getElementById('jdl').value;
        var pesan = document.getElementById('pesan').value;

        if (email === "") {
            alert("Email tidak boleh kosong");
        } else if (jdl === "") {
            alert("Judul pesan tidak boleh kosong");
        } else if (pesan === "") {
            alert("Pesan tidak boleh kosong");
        } else {
            $('#btnProses').html('<i class="fa fa-envelope-o"></i> Sending...');
            $('#btnProses').attr('disabled', true);

            var form_data = new FormData();
            form_data.append('nm_depan', nm_depan);
            form_data.append('nm_belakang', nm_belakang);
            form_data.append('email', email);
            form_data.append('jdl', jdl);
            form_data.append('pesan', pesan);            

            $.ajax({
                url: "<?php echo base_url(); ?>/hub/proses",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function (response) {
                    $('#btnProses').html('<i class="fa fa-envelope-o"></i> Kirim Pesan');
                    $('#btnProses').attr('disabled', false);

                    alert(response.status);
                    bersih();

                }, error: function (response) {
                    alert(response.status);
                    $('#btnProses').html('<i class="fa fa-envelope-o"></i> Kirim Pesan');
                    $('#btnProses').attr('disabled', false);
                    
                    bersih();
                }
            });
        }
    }
    
    function bersih(){
        document.getElementById('nm_depan').value = "";
        document.getElementById('nm_belakang').value = "";
        document.getElementById('email').value = "";
        document.getElementById('jdl').value = "";
        document.getElementById('pesan').value = "";
    }

</script>