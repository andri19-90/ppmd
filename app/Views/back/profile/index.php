<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {
        var nrp = document.getElementById('nrp').value;
        var nama = document.getElementById('nama').value;
        var email = document.getElementById('email').value;
        var korps = document.getElementById('korps').value;
        var pangkat = document.getElementById('pangkat').value;
        var foto = $('#foto').prop('files')[0];
        
        if(nrp === ""){
            alert("NRP tidak boleh kosong");
        }else if(nama === ""){
            alert("Nama personil tidak boleh kosong");
        }else if(email === ""){
            alert("Email tidak boleh kosong");
        }else if(korps === "-"){
            alert("Pilih korps terlebih dahulu");
        }else if(pangkat === "-"){
            alert("Pilih pangkat terlebih dahulu");
        }else{
            $('#btnSave').text('Saving...');
            $('#btnSave').attr('disabled',true);

            var form_data = new FormData();
            form_data.append('nrp', nrp);
            form_data.append('nama', nama);
            form_data.append('email', email);
            form_data.append('korps', korps);
            form_data.append('pangkat', pangkat);
            form_data.append('file', foto);

            $.ajax({
                url: "<?php echo base_url(); ?>/profile/proses",
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
    <h4 class="font-weight-bold py-3 mb-0">Profile Saya</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Profil Saya</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Profil Saya</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">NRP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" autocomplete="off" id="nrp" name="nrp" value="<?php echo $pro->nrp; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Nama Personil</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" autocomplete="off" id="nama" name="nama" value="<?php echo $pro->nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Email</label>
                        <div class="col-sm-10">
                            <input id="email" name="email" type="text" class="form-control" autocomplete="off" value="<?php echo $pro->email; ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Korps</label>
                        <div class="col-sm-10">
                            <select id="korps" name="korps" class="form-control">
                                <option value="-">- PILIH KORPS -</option>
                                <?php
                                foreach ($korps->getResult() as $row) {
                                    if($row->idkorps == $pro->idkorps){
                                        ?>
                                <option selected value="<?php echo $row->idkorps; ?>"><?php echo $row->nama_korps; ?></option>
                                        <?php
                                    }else{
                                        ?>
                                <option value="<?php echo $row->idkorps; ?>"><?php echo $row->nama_korps; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Pangkat</label>
                        <div class="col-sm-10">
                            <select id="pangkat" name="pangkat" class="form-control">
                                <option value="-">- PILIH PANGKAT -</option>
                                <?php
                                foreach ($pangkat->getResult() as $row) {
                                    if($row->idpangkat == $pro->idpangkat){
                                        ?>
                                <option selected value="<?php echo $row->idpangkat; ?>"><?php echo $row->nama_pangkat; ?></option>
                                        <?php
                                    }else{
                                        ?>
                                <option value="<?php echo $row->idpangkat; ?>"><?php echo $row->nama_pangkat; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="foto" name="foto">
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