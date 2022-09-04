<script type="text/javascript">
    
    var save_method; //for save method string
    var table;
    
    $(document).ready(function () {
        table = $('#tb').DataTable({
            ajax: "<?php echo base_url(); ?>/slider/ajaxlist",
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
        $('.modal-title').text('Tambah gambar slider');
    }
    
    function prosestext() {
        $('#btnSave').text('Saving...');
        $('#btnSave').attr('disabled', true);

        var judul = document.getElementById('judul').value;
        var subjudul = document.getElementById('subjudul').value;

        var form_data = new FormData();
        form_data.append('judul', judul);
        form_data.append('subjudul', subjudul);

        $.ajax({
            url: "<?php echo base_url(); ?>/slider/prosestext",
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
    
    function savegambar() {
        var kode = document.getElementById('kode').value;
        var file = $('#file').prop('files')[0];
        
        $('#btnSaveGambar').text('Saving...'); //change button text
        $('#btnSaveGambar').attr('disabled', true); //set button disable 

        var url = "";
        if (save_method === 'add') {
            url = "<?php echo base_url(); ?>/slider/ajax_add";
        } else {
            url = "<?php echo base_url(); ?>/slider/ajax_edit";
        }

        var form_data = new FormData();
        form_data.append('kode', kode);
        form_data.append('file', file);

        // ajax adding data to database
        $.ajax({
            url: url,
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

                $('#btnSaveGambar').text('Save'); //change button text
                $('#btnSaveGambar').attr('disabled', false); //set button enable 
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);

                $('#btnSaveGambar').text('Save'); //change button text
                $('#btnSaveGambar').attr('disabled', false); //set button enable 
            }
        });
    }

    function hapus(id, nama) {
        if (confirm("Apakah anda yakin menghapus slider nomor " + nama + " ?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>/slider/hapus/" + id,
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
        $('.modal-title').text('Ganti gambar slider');
        $.ajax({
            url: "<?php echo base_url(); ?>/slider/ganti/" + id,
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                $('[name="kode"]').val(data.idslider);
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data');
            }
        });
    }
    
    function closemodal(){
        $('#modal_form').modal('hide');
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Slider</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Slider</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Teks Slider</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" autocomplete="off" id="judul" name="judul" value="<?php echo $judul; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Sub Judul</label>
                        <div class="col-sm-10">
                            <textarea id="subjudul" name="subjudul" class="form-control">
                                <?php echo trim($subjudul); ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button id="btnSave" type="button" class="btn btn-sm btn-primary" onclick="prosestext();">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <th>#</th>
                                    <th>Gambar</th>
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
                <p style="color: red;">Resolusi gambar terbaik 1740 x 1000 pixel</p>
                <br>
                <form id="form">
                    <input type="hidden" id="kode" name="kode">
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control" autocomplete="off" id="file" name="file">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btnSaveGambar" type="button" class="btn btn-primary" onclick="savegambar();">Save</button>
            </div>
        </div>
    </div>
</div>