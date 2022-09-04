<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {
        $('#btnSave').text('Saving...');
        $('#btnSave').attr('disabled', true);

        var ins = document.getElementById('ins').value;
        var slogan = document.getElementById('slogan').value;
        var tahun = document.getElementById('tahun').value;
        var pimpinan = document.getElementById('pimpinan').value;
        var alamat = document.getElementById('alamat').value;
        var kdpos = document.getElementById('kdpos').value;
        var tlp = document.getElementById('tlp').value;
        var fax = document.getElementById('fax').value;
        var website = document.getElementById('website').value;
        var foto = $('#logo').prop('files')[0];

        var form_data = new FormData();
        form_data.append('ins', ins);
        form_data.append('slogan', slogan);
        form_data.append('tahun', tahun);
        form_data.append('pimpinan', pimpinan);
        form_data.append('alamat', alamat);
        form_data.append('kdpos', kdpos);
        form_data.append('tlp', tlp);
        form_data.append('fax', fax);
        form_data.append('website', website);
        form_data.append('file', foto);

        $.ajax({
            url: "<?php echo base_url(); ?>/identitas/proses",
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
            }, error: function (response) {
                alert(response.status);
                $('#btnSave').text('Save');
                $('#btnSave').attr('disabled', false);
            }
        });
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Identitas Perusahaan</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Identitas Perusahaan</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Instansi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Instansi" autocomplete="off" id="ins" name="ins" value="<?php echo $instansi; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Slogan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Slogan" autocomplete="off" id="slogan" name="slogan" value="<?php echo $slogan; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Tahun Berdiri</label>
                        <div class="col-sm-10">
                            <input id="tahun" name="tahun" type="text" class="form-control" placeholder="Tahun Berdiri" autocomplete="off" value="<?php echo $tahun; ?>" onkeypress="return hanyaAngka(event,false);">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Nama Pimpinan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama Pimpinan" id="pimpinan" name="pimpinan" autocomplete="off" value="<?php echo $pimpinan; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Alamat Instansi" id="alamat" name="alamat" autocomplete="off" value="<?php echo $alamat; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Kode POS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Kode POS" autocomplete="off" id="kdpos" name="kdpos" value="<?php echo $kdpos; ?>" onkeypress="return hanyaAngka(event,false);">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Telepon" id="tlp" name="tlp" autocomplete="off" value="<?php echo $tlp; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Fax</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Fax" id="fax" name="fax" value="<?php echo $fax; ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Website</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Website" id="website" name="website" autocomplete="off" value="<?php echo $website; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Logo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="logo" name="logo">
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