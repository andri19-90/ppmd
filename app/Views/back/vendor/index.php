<script type="text/javascript">

    var save_method; //for save method string
    var table;

    $(document).ready(function () {
        table = $('#tb').DataTable({
            ajax: "<?php echo base_url(); ?>/vendor/ajaxlist",
            ordering: false
        });
    });

    function reload() {
        table.ajax.reload(null, false); //reload datatable ajax
    }

    function add() {
        save_method = 'add';
        $('#form')[0].reset();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah vendor perumahan');
    }

    function save() {
        var kode = document.getElementById('kode').value;
        var nama = document.getElementById('nama').value;
        var alamat = document.getElementById('alamat').value;
        var tlp = document.getElementById('tlp').value;
        var web = document.getElementById('web').value;
        var email = document.getElementById('email').value;
        var deskripsi = document.getElementById('deskripsi').value;
        var foto = $('#logo').prop('files')[0];
        
        if (nama === '') {
            alert("Nama vendor perumahan tidak boleh kosong");
        } else {
            $('#btnSave').text('Saving...'); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 

            var url = "";
            if (save_method === 'add') {
                url = "<?php echo base_url(); ?>/vendor/ajax_add";
            } else {
                url = "<?php echo base_url(); ?>/vendor/ajax_edit";
            }
            
            var form_data = new FormData();
            form_data.append('kode', kode);
            form_data.append('nama', nama);
            form_data.append('alamat', alamat);
            form_data.append('tlp', tlp);
            form_data.append('web', web);
            form_data.append('email', email);
            form_data.append('deskripsi', deskripsi);
            form_data.append('file', foto);
        
            $.ajax({
                url : url,
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function (data) {
                    alert(data.status);
                    $('#modal_form').modal('hide');
                    reload();

                    $('#btnSave').text('Save');
                    $('#btnSave').attr('disabled', false);
                }, error: function (jqXHR, textStatus, errorThrown) {
                    alert("Error json " + errorThrown);

                    $('#btnSave').text('Save');
                    $('#btnSave').attr('disabled', false);
                }
            });
        }
    }

    function hapus(id, nama) {
        if (confirm("Apakah anda yakin menghapus vendor " + nama + " ?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>/vendor/hapus/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data) {
                    alert(data.status);
                    reload();
                }, error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error hapus data');
                }
            });
        }
    }

    function ganti(id) {
        save_method = 'update';
        $('#form')[0].reset();
        $('#modal_form').modal('show');
        $('.modal-title').text('Ganti vendor perumahan');
        $.ajax({
            url: "<?php echo base_url(); ?>/vendor/ganti/" + id,
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                $('[name="kode"]').val(data.idvendor);
                $('[name="nama"]').val(data.namavendor);
                $('[name="alamat"]').val(data.alamat);
                $('[name="tlp"]').val(data.tlp);
                $('[name="web"]').val(data.website);
                $('[name="email"]').val(data.email);
                $('[name="deskripsi"]').val(data.deskripsi);
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data');
            }
        });
    }
    
    function closemodal(){
        $('#modal_form').modal('hide');
    }
    
    function detil(kode){
        window.location.href = "<?php echo base_url(); ?>/vendor/detil/" + kode;
    }
    
    function medsos(kode){
        $('#form_medsos')[0].reset();
        $('#modal_medsos').modal('show');
        $.ajax({
            url: "<?php echo base_url(); ?>/vendor/loadmedsoss/" + kode,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('[name="idvendor"]').val(kode);
                $('[name="tw"]').val(data.tw);
                $('[name="fb"]').val(data.fb);
                $('[name="gp"]').val(data.gp);
                $('[name="lk"]').val(data.lk);
                $('[name="ig"]').val(data.ig);
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data');
            }
        });
    }
    
    function save_medsos(){
        var tw = document.getElementById('tw').value;
        var fb = document.getElementById('fb').value;
        var gp = document.getElementById('gp').value;
        var lk = document.getElementById('lk').value;
        var ig = document.getElementById('ig').value;
        var idvendor = document.getElementById('idvendor').value;
        
        $('#btnSaveMedsos').text('Saving...');
        $('#btnSaveMedsos').attr('disabled', true);

        var form_data = new FormData();
        form_data.append('tw', tw);
        form_data.append('fb', fb);
        form_data.append('gp', gp);
        form_data.append('lk', lk);
        form_data.append('ig', ig);
        form_data.append('idvendor', idvendor);

        $.ajax({
            url : "<?php echo base_url(); ?>/vendor/ajax_proses_medsos",
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'POST',
            success: function (data) {
                alert(data.status);
                $('#modal_medsos').modal('hide');

                $('#btnSaveMedsos').text('Save');
                $('#btnSaveMedsos').attr('disabled', false);
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);

                $('#btnSaveMedsos').text('Save');
                $('#btnSaveMedsos').attr('disabled', false);
            }
        });
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Vendor Perumahan</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Vendor Perumahan</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm" onclick="add();">Tambah</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="reload();">Reload</button>
                </div>
                <div class="card-body">
                    <div class="card-datatable table-responsive">
                        <table id="tb" class="datatables-demo table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Vendor</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="kode" name="kode">
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Logo</label>
                            <input type="file" class="form-control" autocomplete="off" id="logo" name="logo">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Vendor</label>
                            <input type="text" class="form-control" autocomplete="off" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" autocomplete="off" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control" autocomplete="off" id="tlp" name="tlp">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" autocomplete="off" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Website</label>
                            <input type="text" class="form-control" autocomplete="off" id="web" name="web">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" autocomplete="off" id="deskripsi" name="deskripsi">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btnSave" type="button" class="btn btn-primary" onclick="save();">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_medsos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Media Sosial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <form id="form_medsos">
                    <input type="hidden" id="idvendor" name="idvendor" readonly autocomplete>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Twiter</label>
                            <input type="text" class="form-control" autocomplete="off" id="tw" name="tw">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Facebook</label>
                            <input type="text" class="form-control" autocomplete="off" id="fb" name="fb">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Google Plus</label>
                            <input type="text" class="form-control" autocomplete="off" id="gp" name="gp">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Linkedin</label>
                            <input type="text" class="form-control" autocomplete="off" id="lk" name="lk">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Instagram</label>
                            <input type="text" class="form-control" autocomplete="off" id="ig" name="ig">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btnSaveMedsos" type="button" class="btn btn-primary" onclick="save_medsos();">Save</button>
            </div>
        </div>
    </div>
</div>