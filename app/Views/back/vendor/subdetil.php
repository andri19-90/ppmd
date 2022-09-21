<script type="text/javascript">
    
    var save_method;
    var table;
    
    $(document).ready(function () {
        table = $('#tb').DataTable({
            ajax: "<?php echo base_url(); ?>/vendor/ajaxgambarlain/<?php echo $head->idproduk; ?>",
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
        $('.modal-title').text('Tambah gambar produk');
    }

    function proses() {
        $('#btnSave').text('Saving...');
        $('#btnSave').attr('disabled', true);

        var kode = document.getElementById('idproduk').value;
        var ket = tinyMCE.get('ket').getContent();

        var form_data = new FormData();
        form_data.append('kode', kode);
        form_data.append('ket', ket);

        $.ajax({
            url: "<?php echo base_url(); ?>/vendor/prosesdeskripsi",
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
        $('#btnSaveGambar').text('Saving...');
        $('#btnSaveGambar').attr('disabled', true);

        var kode = document.getElementById('kode').value;
        var idproduk = document.getElementById('idproduk').value;
        var keterangan = document.getElementById('keterangan').value;
        var gambar = $('#gambar').prop('files')[0];

        var form_data = new FormData();
        form_data.append('kode', kode);
        form_data.append('idproduk', idproduk);
        form_data.append('keterangan', keterangan);
        form_data.append('file', gambar);
        
        var url = "";
        if (save_method === 'add') {
            url = "<?php echo base_url(); ?>/vendor/ajax_add_gambar";
        } else {
            url = "<?php echo base_url(); ?>/vendor/ajax_edit_gambar";
        }
            
        $.ajax({
            url: url,
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'POST',
            success: function (response) {
                alert(response.status);
                reload();
                $('#modal_form').modal('hide');
                
                $('#btnSaveGambar').text('Save');
                $('#btnSaveGambar').attr('disabled', false);
            }, error: function (response) {
                alert(response.status);
                $('#btnSaveGambar').text('Save');
                $('#btnSaveGambar').attr('disabled', false);
            }
        });
    }
    
    function hapus(id, no) {
        if (confirm("Apakah anda yakin menghapus gambar produk nomor " + no + " ?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>/vendor/hapusgambar/" + id,
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
        $('.modal-title').text('Ganti gambar produk');
        $.ajax({
            url: "<?php echo base_url(); ?>/vendor/showgambar/" + id,
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                $('[name="kode"]').val(data.idproduk_img);
                $('[name="keterangan"]').val(data.keterangan);
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data');
            }
        });
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/vendor/detil/<?php echo $idvendor; ?>">Vendor Perumahan</a></li>
            <li class="breadcrumb-item active">Detil Produk</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Deskripsi Produk</h5>
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-sm" onclick="add();">Tambah</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="reload();">Reload</button>
                    <div class="card-datatable table-responsive">
                        <table id="tb" class="datatables-demo table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Keterangan</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea class="form-control" id="ket" name="ket"><?php echo $head->deskripsi_singkat; ?></textarea>
                            <script type="text/javascript">
                                var BASE_URL = "<?php echo base_url(); ?>";
                                tinymce.init({
                                    selector: "#ket",theme: "modern",height: 250,
                                    plugins: [
                                        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                                        "searchreplace wordcount visualblocks visualchars insertdatetime nonbreaking",
                                        "table contextmenu directionality emoticons paste textcolor"
                                ],
                                toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
                                toolbar2: "| link unlink anchor | forecolor backcolor  | print preview code ",
                                image_advtab: true ,
                                external_filemanager_path: BASE_URL + "/filemanager/",
                                filemanager_title: "File Gallery",
                                relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                external_plugins: {"filemanager": BASE_URL + "/filemanager/plugin.min.js"}
                                });
                            </script>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 ml-sm-auto">
                            <button id="btnSave" type="button" class="btn btn-primary" onclick="proses();">Save</button>
                        </div>
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
                    <input type="hidden" id="idproduk" name="idproduk" value="<?php echo $head->idproduk; ?>">
                    <input type="hidden" id="kode" name="kode">
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control" autocomplete="off" id="gambar" name="gambar">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" autocomplete="off" id="keterangan" name="keterangan">
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