<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {
        var nrp = document.getElementById('nrp').value;
        var lama = document.getElementById('lama').value;
        var baru = document.getElementById('baru').value;
        
        if(nrp === ""){
            alert("NRP tidak boleh kosong");
        }else if(lama === ""){
            alert("Password lama tidak boleh kosong");
        }else if(baru === ""){
            alert("Password baru tidak boleh kosong");
        }else{
            $('#btnSave').text('Saving...');
            $('#btnSave').attr('disabled',true);

            var form_data = new FormData();
            form_data.append('nrp', nrp);
            form_data.append('lama', lama);
            form_data.append('baru', baru);

            $.ajax({
                url: "<?php echo base_url(); ?>/gantipass/proses",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function (response) {
                    alert(response.status);

                    $('#btnSave').text('Save');
                    $('#btnSave').attr('disabled', false);
                },error: function (response) {
                    alert(response.status);
                    $('#btnSave').text('Save');
                    $('#btnSave').attr('disabled', false);
                }
            });
        }
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Ganti Password</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Ganti Password</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Ganti Password</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">NRP</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="nrp" name="nrp" type="text" value="<?php echo $pro->nrp; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Password Lama</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="lama" name="lama" type="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Password Baru</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="baru" name="baru" type="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button id="btnSave" type="button" class="btn btn-primary" onclick="proses();">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>